<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class cancelaCFDISignature
{

    /**
     * @var string $usuarioSIFEI
     */
    protected $usuarioSIFEI = null;

    /**
     * @var string $passUser
     */
    protected $passUser = null;

    /**
     * @var base64Binary $archivoZIP
     */
    protected $archivoZIP = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsuarioSIFEI()
    {
      return $this->usuarioSIFEI;
    }

    /**
     * @param string $usuarioSIFEI
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISignature
     */
    public function setUsuarioSIFEI($usuarioSIFEI)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassUser()
    {
      return $this->passUser;
    }

    /**
     * @param string $passUser
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISignature
     */
    public function setPassUser($passUser)
    {
      $this->passUser = $passUser;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getArchivoZIP()
    {
      return $this->archivoZIP;
    }

    /**
     * @param base64Binary $archivoZIP
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISignature
     */
    public function setArchivoZIP($archivoZIP)
    {
      $this->archivoZIP = $archivoZIP;
      return $this;
    }

}
