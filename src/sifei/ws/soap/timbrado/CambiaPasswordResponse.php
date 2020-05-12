<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class CambiaPasswordResponse
{

    /**
     * @var boolean $return
     */
    protected $return = null;

    /**
     * @param boolean $return
     */
    public function __construct($return = null)
    {
      $this->return = $return;
    }

    /**
     * @return boolean
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param boolean $return
     * @return \DHF\Sifei\Ws\Soap\Timbrado\CambiaPasswordResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
