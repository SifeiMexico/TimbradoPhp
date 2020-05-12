<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class SifeiException
{

    /**
     * @var string $codigo
     */
    protected $codigo = null;

    /**
     * @var string $error
     */
    protected $error = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var base64Binary $xml
     */
    protected $xml = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
      return $this->codigo;
    }

    /**
     * @param string $codigo
     * @return \DHF\Sifei\Ws\Soap\Timbrado\SifeiException
     */
    public function setCodigo($codigo)
    {
      $this->codigo = $codigo;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param string $error
     * @return \DHF\Sifei\Ws\Soap\Timbrado\SifeiException
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \DHF\Sifei\Ws\Soap\Timbrado\SifeiException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getXml()
    {
      return $this->xml;
    }

    /**
     * @param base64Binary $xml
     * @return \DHF\Sifei\Ws\Soap\Timbrado\SifeiException
     */
    public function setXml($xml)
    {
      $this->xml = $xml;
      return $this;
    }

}
