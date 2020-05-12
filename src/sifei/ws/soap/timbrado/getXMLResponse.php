<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getXMLResponse
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getXMLResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
