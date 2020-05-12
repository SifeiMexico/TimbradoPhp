<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getXML
{

    /**
     * @var string $rfc
     */
    protected $rfc = null;

    /**
     * @var string $pass
     */
    protected $pass = null;

    /**
     * @var string $hash
     */
    protected $hash = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRfc()
    {
      return $this->rfc;
    }

    /**
     * @param string $rfc
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXML
     */
    public function setRfc($rfc)
    {
      $this->rfc = $rfc;
      return $this;
    }

    /**
     * @return string
     */
    public function getPass()
    {
      return $this->pass;
    }

    /**
     * @param string $pass
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXML
     */
    public function setPass($pass)
    {
      $this->pass = $pass;
      return $this;
    }

    /**
     * @return string
     */
    public function getHash()
    {
      return $this->hash;
    }

    /**
     * @param string $hash
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXML
     */
    public function setHash($hash)
    {
      $this->hash = $hash;
      return $this;
    }

}
