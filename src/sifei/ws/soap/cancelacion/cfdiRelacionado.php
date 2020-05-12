<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class cfdiRelacionado
{

    /**
     * @var string $usuarioSIFEI
     */
    protected $usuarioSIFEI = null;

    /**
     * @var string $passwordSIFEI
     */
    protected $passwordSIFEI = null;

    /**
     * @var string $rfcReceptor
     */
    protected $rfcReceptor = null;

    /**
     * @var string $rfcEmisor
     */
    protected $rfcEmisor = null;

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var base64Binary $pfx
     */
    protected $pfx = null;

    /**
     * @var string $passwordPfx
     */
    protected $passwordPfx = null;

    /**
     * @param string $usuarioSIFEI
     * @param string $passwordSIFEI
     * @param string $uuid
     * @param string $passwordPfx
     */
    public function __construct($usuarioSIFEI = null, $passwordSIFEI = null, $uuid = null, $passwordPfx = null)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      $this->passwordSIFEI = $passwordSIFEI;
      $this->uuid = $uuid;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setUsuarioSIFEI($usuarioSIFEI)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordSIFEI()
    {
      return $this->passwordSIFEI;
    }

    /**
     * @param string $passwordSIFEI
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setPasswordSIFEI($passwordSIFEI)
    {
      $this->passwordSIFEI = $passwordSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getRfcReceptor()
    {
      return $this->rfcReceptor;
    }

    /**
     * @param string $rfcReceptor
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setRfcReceptor($rfcReceptor)
    {
      $this->rfcReceptor = $rfcReceptor;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setRfcEmisor($rfcEmisor)
    {
      $this->rfcEmisor = $rfcEmisor;
      return $this;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
      return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado
     */
    public function setPasswordPfx($passwordPfx)
    {
      $this->passwordPfx = $passwordPfx;
      return $this;
    }

}
