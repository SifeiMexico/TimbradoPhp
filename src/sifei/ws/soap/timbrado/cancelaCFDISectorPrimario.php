<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class cancelaCFDISectorPrimario
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimario
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimario
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimario
     */
    public function setRfc($rfc)
    {
      $this->rfc = $rfc;
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimario
     */
    public function setUUIDS(array $UUIDS = null)
    {
      $this->UUIDS = $UUIDS;
      return $this;
    }

}
