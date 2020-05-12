<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getTimbreCFDI
{

    /**
     * @var string $Usuario
     */
    protected $Usuario = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var base64Binary $archivoXMLZip
     */
    protected $archivoXMLZip = null;

    /**
     * @var string $Serie
     */
    protected $Serie = null;

    /**
     * @var string $IdEquipo
     */
    protected $IdEquipo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
      return $this->Usuario;
    }

    /**
     * @param string $Usuario
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI
     */
    public function setUsuario($Usuario)
    {
      $this->Usuario = $Usuario;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getArchivoXMLZip()
    {
      return $this->archivoXMLZip;
    }

    /**
     * @param base64Binary $archivoXMLZip
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI
     */
    public function setArchivoXMLZip($archivoXMLZip)
    {
      $this->archivoXMLZip = $archivoXMLZip;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerie()
    {
      return $this->Serie;
    }

    /**
     * @param string $Serie
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI
     */
    public function setSerie($Serie)
    {
      $this->Serie = $Serie;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdEquipo()
    {
      return $this->IdEquipo;
    }

    /**
     * @param string $IdEquipo
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI
     */
    public function setIdEquipo($IdEquipo)
    {
      $this->IdEquipo = $IdEquipo;
      return $this;
    }

}
