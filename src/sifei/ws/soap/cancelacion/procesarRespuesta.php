<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class procesarRespuesta
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
     * @var folios[] $folios
     */
    protected $folios = null;

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
     * @param string $rfcReceptor
     * @param string $passwordPfx
     */
    public function __construct($usuarioSIFEI = null, $passwordSIFEI = null, $rfcReceptor = null, $passwordPfx = null)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      $this->passwordSIFEI = $passwordSIFEI;
      $this->rfcReceptor = $rfcReceptor;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
     */
    public function setRfcReceptor($rfcReceptor)
    {
      $this->rfcReceptor = $rfcReceptor;
      return $this;
    }

    /**
     * @return folios[]
     */
    public function getFolios()
    {
      return $this->folios;
    }

    /**
     * @param folios[] $folios
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
     */
    public function setFolios(array $folios = null)
    {
      $this->folios = $folios;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta
     */
    public function setPasswordPfx($passwordPfx)
    {
      $this->passwordPfx = $passwordPfx;
      return $this;
    }

}
