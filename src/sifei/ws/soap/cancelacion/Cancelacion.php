<?php

namespace DHF\Sifei\Ws\Soap\Cancelacion;

class Cancelacion extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    protected static $classmap = array (
      'procesarRespuesta' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\procesarRespuesta',
      'folios' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\folios',
      'procesarRespuestaResponse' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\procesarRespuestaResponse',
      'sifeiServiceFault' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\sifeiServiceFault',
      'consultaSATCFDI' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\consultaSATCFDI',
      'consultaSATCFDIResponse' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\consultaSATCFDIResponse',
      'peticionesPendientes' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\peticionesPendientes',
      'peticionesPendientesResponse' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\peticionesPendientesResponse',
      'cancelaCFDI' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\cancelaCFDI',
      'cancelaCFDIResponse' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\cancelaCFDIResponse',
      'cfdiRelacionado' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\cfdiRelacionado',
      'cfdiRelacionadoResponse' => 'DHF\\Sifei\\Ws\\Soap\\Cancelacion\\cfdiRelacionadoResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
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
        $wsdl = 'http://devcfdi.sifei.com.mx:8888/CancelacionSIFEI/Cancelacion?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param cancelaCFDI $parameters
     * @return cancelaCFDIResponse
     */
    public function cancelaCFDI(cancelaCFDI $parameters)
    {
      return $this->__soapCall('cancelaCFDI', array($parameters));
    }

    /**
     * @param procesarRespuesta $parameters
     * @return procesarRespuestaResponse
     */
    public function procesarRespuesta(procesarRespuesta $parameters)
    {
      return $this->__soapCall('procesarRespuesta', array($parameters));
    }

    /**
     * @param cfdiRelacionado $parameters
     * @return cfdiRelacionadoResponse
     */
    public function cfdiRelacionado(cfdiRelacionado $parameters)
    {
      return $this->__soapCall('cfdiRelacionado', array($parameters));
    }

    /**
     * @param peticionesPendientes $parameters
     * @return peticionesPendientesResponse
     */
    public function peticionesPendientes(peticionesPendientes $parameters)
    {
      return $this->__soapCall('peticionesPendientes', array($parameters));
    }

    /**
     * @param consultaSATCFDI $parameters
     * @return consultaSATCFDIResponse
     */
    public function consultaSATCFDI(consultaSATCFDI $parameters)
    {
      return $this->__soapCall('consultaSATCFDI', array($parameters));
    }

}
