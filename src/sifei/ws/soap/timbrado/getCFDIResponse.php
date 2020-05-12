<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getCFDIResponse
{

    /**
     * @var base64Binary $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param base64Binary $return
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getCFDIResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
