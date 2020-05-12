<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getCFDISendPDFResponse
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
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getCFDISendPDFResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
