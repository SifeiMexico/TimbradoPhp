<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class consultaSATCFDI
{

    /**
     * @var string $usuarioSIFEI
     */
    protected $usuarioSIFEI = null;

    /**
     * @var string $passwordSIFEI
     */
    protected $passwordSIFEI = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $re
     */
    protected $re = null;

    /**
     * @var string $rr
     */
    protected $rr = null;

    /**
     * @var string $tt
     */
    protected $tt = null;

    /**
     * @var string $fe
     */
    protected $fe = null;

    /**
     * @param string $usuarioSIFEI
     * @param string $passwordSIFEI
     * @param string $id
     * @param string $re
     * @param string $rr
     * @param string $tt
     * @param string $fe
     */
    public function __construct($usuarioSIFEI = null, $passwordSIFEI = null, $id = null, $re = null, $rr = null, $tt = null, $fe = null)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      $this->passwordSIFEI = $passwordSIFEI;
      $this->id = $id;
      $this->re = $re;
      $this->rr = $rr;
      $this->tt = $tt;
      $this->fe = $fe;
      if(strlen($this->fe)>8){
        $this->fe=substr($this->fe, -8);
        }
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
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setUsuarioSIFEI($usuarioSIFEI)
    {
      $this->usuarioSIFEI = $usuarioSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordSIFEI()
    {
      return $this->passwordSIFEI;
    }

    /**
     * @param string $passwordSIFEI
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setPasswordSIFEI($passwordSIFEI)
    {
      $this->passwordSIFEI = $passwordSIFEI;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getRe()
    {
      return $this->re;
    }

    /**
     * @param string $re
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setRe($re)
    {
      $this->re = $re;
      return $this;
    }

    /**
     * @return string
     */
    public function getRr()
    {
      return $this->rr;
    }

    /**
     * @param string $rr
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setRr($rr)
    {
      $this->rr = $rr;
      return $this;
    }

    /**
     * @return string
     */
    public function getTt()
    {
      return $this->tt;
    }

    /**
     * @param string $tt
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setTt($tt)
    {
      $this->tt = $tt;
      return $this;
    }

    /**
     * @return string
     */
    public function getFe()
    {
      return $this->fe;
    }

    /**
     * @param string $fe
     * @return \DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI
     */
    public function setFe($fe)
    {
      $this->fe = $fe;
      return $this;
    }

}
