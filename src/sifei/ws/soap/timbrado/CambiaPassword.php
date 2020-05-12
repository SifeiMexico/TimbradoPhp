<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class CambiaPassword
{

    /**
     * @var string $Usuario
     */
    protected $Usuario = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $NewPassword
     */
    protected $NewPassword = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
      return $this->Usuario;
    }

    /**
     * @param string $Usuario
     * @return \DHF\Sifei\Ws\Soap\Timbrado\CambiaPassword
     */
    public function setUsuario($Usuario)
    {
      $this->Usuario = $Usuario;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \DHF\Sifei\Ws\Soap\Timbrado\CambiaPassword
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->NewPassword;
    }

    /**
     * @param string $NewPassword
     * @return \DHF\Sifei\Ws\Soap\Timbrado\CambiaPassword
     */
    public function setNewPassword($NewPassword)
    {
      $this->NewPassword = $NewPassword;
      return $this;
    }

}
