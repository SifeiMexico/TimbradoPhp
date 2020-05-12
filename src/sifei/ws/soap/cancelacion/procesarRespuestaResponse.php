<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class procesarRespuestaResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuestaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
