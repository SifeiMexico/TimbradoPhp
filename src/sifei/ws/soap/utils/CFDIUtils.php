<?php
namespace DHF\Sifei\Ws\Soap\utils;

use Exception;
use DOMDocument;
use XSLTProcessor;

class CFDIUtils {
    
        /**
         * 
         *
         * @var string
         */
        protected $key;
    
        protected $passphrase;
    
        protected $comprobante;
    
        public function pkcs8DER2PEM($keyDerContent){
            $type="ENCRYPTED PRIVATE KEY";
            $pem = chunk_split(base64_encode($keyDerContent), 64, "\n");
            $pem = "-----BEGIN ".$type."-----\n".$pem."-----END ".$type."-----\n";
            return $pem;
        }
        /**
         * Obtiene el sello.
         *
         * @param  $key Llave privada usada para sellar. Contenido PEM de la llave
         * @param  $passphrase Contraseña de la llave.
         * @return string
         */
        public function getSello($key,$passphrase='',$type='PEM'): string
        {
            if($type=='DER'){
                $key=$this->pkcs8DER2PEM($key);            
            }
            #pasamos la llave y la contraseña para preparar la llave y ser usada en la operacion de firmar
            $pkey = openssl_get_privatekey($key,$passphrase);
            if(false===$pkey){
                throw new Exception("Ocurrio un error al importa llave, verifica que los parametros son correctos");
            }
            #firmamos la cadena , es decir generamos el sello.
            openssl_sign(@$this->getCadenaOriginal(), $signature, $pkey, OPENSSL_ALGO_SHA256);
            openssl_free_key($pkey);
            #codificamos la cadena en base64
            return base64_encode($signature);
        }
        /**
         * Gets the original string.
         *
         * @return string
         */
        public function getCadenaOriginal(): string
        {
            $xsl = new DOMDocument();
            #importamos el xslt
            $path = __DIR__.'/../../../../../sat/xslt/cadenaoriginal_3_3.xslt';
            $path=\realpath($path);
            //$xslt = file_get_contents($path);
            
            
            $xsl->load($path);
            $xslt = new XSLTProcessor();
            $xslt->importStyleSheet($xsl);
    
            $xml = new DOMDocument();
            $xml->loadXML($this->comprobante->saveXML());
            #generamos el xslt
            return (string) $xslt->transformToXml($xml);
        }
    
        /**
         * Set the value of comprobante
         *
         * @return  self
         */
        public function setComprobante($comprobante)
        {
            $this->comprobante = $comprobante;
    
            return $this;
        }   
    
}