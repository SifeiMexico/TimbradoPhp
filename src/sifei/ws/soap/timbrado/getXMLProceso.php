<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getXMLProceso
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
     * @var int $idseguimiento
     */
    protected $idseguimiento = null;

    /**
     * @param int $idseguimiento
     */
    public function __construct($idseguimiento = null)
    {
      $this->idseguimiento = $idseguimiento;
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXMLProceso
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXMLProceso
     */
    public function setPass($pass)
    {
      $this->pass = $pass;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdseguimiento()
    {
      return $this->idseguimiento;
    }

    /**
     * @param int $idseguimiento
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXMLProceso
     */
    public function setIdseguimiento($idseguimiento)
    {
      $this->idseguimiento = $idseguimiento;
      return $this;
    }

}
