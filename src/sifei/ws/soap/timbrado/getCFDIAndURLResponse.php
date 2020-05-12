<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getCFDIAndURLResponse
{

    /**
     * @var string[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string[] $return
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getCFDIAndURLResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
