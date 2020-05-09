<?php

use DOMDocument;
//clase ejeemplo de genracion de cadena originaly sellado
class ejemplo_cadena_original_sello {
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
        $path = __DIR__.'/sat/xslt/cadenaoriginal_3_3.xslt';
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


function println($str){
    echo $str."\n";
}

#para sellar se necesita generar la cadena original y luego sellarla, esta clase ofrece el metodo para hacer todo en un sola invocacion

$dom= new DOMDocument();
#en este caso se carga el xml desde archivo
$dom->load(__DIR__."/assets/cfdi.xml");

$utils= new ejemplo_cadena_original_sello();
$utils->setComprobante($dom);



#todo desde un solo metodo: genera la cadena original, sella y codifica en base64 lista para agregar en el atributo Sello del CFDI

println($utils->getSello(
    file_get_contents("ENCRYPTED_KEY.pem"), #llave en formato PEM
    "12345678a")                    #contraseña
);
# usando .key directamente
println($utils->getSello(
    file_get_contents("key.key"), #llave en formato DER
    "12345678a",
    'DER'                    #contraseña
    )
);
#si deseas ver la cadena original.
println($utils->getCadenaOriginal());