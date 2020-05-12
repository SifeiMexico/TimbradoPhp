<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class folios
{

    /**
     * @var respuesta $respuesta
     */
    protected $respuesta = null;

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return respuesta
     */
    public function getRespuesta()
    {
      return $this->respuesta;
    }

    /**
     * @param respuesta $respuesta
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\folios
     */
    public function setRespuesta($respuesta)
    {
      $this->respuesta = $respuesta;
      return $this;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
      return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\folios
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

}
