<?php
namespace DHF\Sifei\Ws\Soap;

use DHF\Sifei\Ws\Soap\Cancelacion\Cancelacion;

 /**
 * @author Daniel J Hdz Fco  <daniel.hernandez.job@gmail.com>
 * Clase para consumir todos los metodos de WS de cancelacion.
 * Contiene las constantes para apuntar a entornos diferentes
 */
class SifeiCancelacionService extends Cancelacion{
    public const DEV_ENV="http://devcfdi.sifei.com.mx:8888/CancelacionSIFEI/Cancelacion?wsdl";
    public const PROD_ENV="https://sat.sifei.com.mx:9000/CancelacionSIFEI/Cancelacion?wsdl";

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null,array $options = array())
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
          #by default DEV Environment is set
        $wsdl = self::DEV_ENV;
      }
      parent::__construct($options,$wsdl);
    }
}