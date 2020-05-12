<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class sifeiServiceFault
{

    /**
     * @var string $codigo
     */
    protected $codigo = null;

    /**
     * @var string $detalle
     */
    protected $detalle = null;

    /**
     * @var string $error
     */
    protected $error = null;

    
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\sifeiServiceFault
     */
    public function setCodigo($codigo)
    {
      $this->codigo = $codigo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetalle()
    {
      return $this->detalle;
    }

    /**
     * @param string $detalle
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\sifeiServiceFault
     */
    public function setDetalle($detalle)
    {
      $this->detalle = $detalle;
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\sifeiServiceFault
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
