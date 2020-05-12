<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class cancelaCFDI
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
     * @var string $rfc
     */
    protected $rfc = null;

    /**
     * @var base64Binary $pfx
     */
    protected $pfx = null;

    /**
     * @var string $passPFX
     */
    protected $passPFX = null;

    /**
     * @var string[] $UUIDS
     */
    protected $UUIDS = null;

    
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
     */
    public function setPassUser($passUser)
    {
      $this->passUser = $passUser;
      return $this;
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
     */
    public function setRfc($rfc)
    {
      $this->rfc = $rfc;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPfx()
    {
      return $this->pfx;
    }

    /**
     * @param base64Binary $pfx
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
     */
    public function setPfx($pfx)
    {
      $this->pfx = $pfx;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassPFX()
    {
      return $this->passPFX;
    }

    /**
     * @param string $passPFX
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
     */
    public function setPassPFX($passPFX)
    {
      $this->passPFX = $passPFX;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getUUIDS()
    {
      return $this->UUIDS;
    }

    /**
     * @param string[] $UUIDS
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI
     */
    public function setUUIDS(array $UUIDS = null)
    {
      $this->UUIDS = $UUIDS;
      return $this;
    }

}
