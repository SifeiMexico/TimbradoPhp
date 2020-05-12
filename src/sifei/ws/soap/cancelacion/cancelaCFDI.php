<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class cancelaCFDI
{

    /**
     * @var string $usuarioSIFEI
     */
    protected $usuarioSIFEI = null;

    /**
     * @var string $passwordSifei
     */
    protected $passwordSifei = null;

    /**
     * @var string $rfcEmisor
     */
    protected $rfcEmisor = null;

    /**
     * @var base64Binary $pfx
     */
    protected $pfx = null;

    /**
     * @var string $passwordPfx
     */
    protected $passwordPfx = null;

    /**
     * @var string[] $uuids
     */
    protected $uuids = null;

    /**
     * @param string $usuarioSIFEI
     * @param string $passwordSifei
     * @param string $rfcEmisor
     * @param string $passwordPfx
     */
    public function __construct($usuarioSIFEI = null, $passwordSifei = null, $rfcEmisor = null, $passwordPfx = null)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      $this->passwordSifei = $passwordSifei;
      $this->rfcEmisor = $rfcEmisor;
      $this->passwordPfx = $passwordPfx;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setUsuarioSIFEI($usuarioSIFEI)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordSifei()
    {
      return $this->passwordSifei;
    }

    /**
     * @param string $passwordSifei
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setPasswordSifei($passwordSifei)
    {
      $this->passwordSifei = $passwordSifei;
      return $this;
    }

    /**
     * @return string
     */
    public function getRfcEmisor()
    {
      return $this->rfcEmisor;
    }

    /**
     * @param string $rfcEmisor
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setRfcEmisor($rfcEmisor)
    {
      $this->rfcEmisor = $rfcEmisor;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setPfx($pfx)
    {
      $this->pfx = $pfx;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordPfx()
    {
      return $this->passwordPfx;
    }

    /**
     * @param string $passwordPfx
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setPasswordPfx($passwordPfx)
    {
      $this->passwordPfx = $passwordPfx;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getUuids()
    {
      return $this->uuids;
    }

    /**
     * @param string[] $uuids
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI
     */
    public function setUuids(array $uuids = null)
    {
      $this->uuids = $uuids;
      return $this;
    }

}
