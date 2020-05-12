<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class SIFEIService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    protected static $classmap = array (
      'getXML' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getXML',
      'getXMLResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getXMLResponse',
      'SifeiException' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\SifeiException',
      'cancelaCFDI' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDI',
      'cancelaCFDIResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDIResponse',
      'cancelaCFDISignature' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDISignature',
      'cancelaCFDISignatureResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDISignatureResponse',
      'getCFDISign' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDISign',
      'getCFDISignResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDISignResponse',
      'getCFDIProcesa' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDIProcesa',
      'getCFDIProcesaResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDIProcesaResponse',
      'getCFDISendPDF' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDISendPDF',
      'getCFDISendPDFResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDISendPDFResponse',
      'cancelaCFDISectorPrimario' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDISectorPrimario',
      'cancelaCFDISectorPrimarioResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\cancelaCFDISectorPrimarioResponse',
      'CambiaPassword' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\CambiaPassword',
      'CambiaPasswordResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\CambiaPasswordResponse',
      'getCFDIAndURL' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDIAndURL',
      'getCFDIAndURLResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDIAndURLResponse',
      'getTimbreCFDI' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getTimbreCFDI',
      'getTimbreCFDIResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getTimbreCFDIResponse',
      'getCFDI' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDI',
      'getCFDIResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getCFDIResponse',
      'getXMLProceso' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getXMLProceso',
      'getXMLProcesoResponse' => 'DHF\\Sifei\\Ws\\Soap\\Timbrado\\getXMLProcesoResponse',
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
        $wsdl = 'http://devcfdi.sifei.com.mx:8080/SIFEI33/SIFEI?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getCFDIProcesa $parameters
     * @return getCFDIProcesaResponse
     */
    public function getCFDIProcesa(getCFDIProcesa $parameters)
    {
      return $this->__soapCall('getCFDIProcesa', array($parameters));
    }

    /**
     * @param getCFDISign $parameters
     * @return getCFDISignResponse
     */
    public function getCFDISign(getCFDISign $parameters)
    {
      return $this->__soapCall('getCFDISign', array($parameters));
    }

    /**
     * @param getCFDIAndURL $parameters
     * @return getCFDIAndURLResponse
     */
    public function getCFDIAndURL(getCFDIAndURL $parameters)
    {
      return $this->__soapCall('getCFDIAndURL', array($parameters));
    }

    /**
     * @param getTimbreCFDI $parameters
     * @return getTimbreCFDIResponse
     */
    public function getTimbreCFDI(getTimbreCFDI $parameters)
    {
      return $this->__soapCall('getTimbreCFDI', array($parameters));
    }

    /**
     * @param CambiaPassword $parameters
     * @return CambiaPasswordResponse
     */
    public function CambiaPassword(CambiaPassword $parameters)
    {
      return $this->__soapCall('CambiaPassword', array($parameters));
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
     * @param cancelaCFDISectorPrimario $parameters
     * @return cancelaCFDISectorPrimarioResponse
     */
    public function cancelaCFDISectorPrimario(cancelaCFDISectorPrimario $parameters)
    {
      return $this->__soapCall('cancelaCFDISectorPrimario', array($parameters));
    }

    /**
     * @param cancelaCFDISignature $parameters
     * @return cancelaCFDISignatureResponse
     */
    public function cancelaCFDISignature(cancelaCFDISignature $parameters)
    {
      return $this->__soapCall('cancelaCFDISignature', array($parameters));
    }

    /**
     * @param getXML $parameters
     * @return getXMLResponse
     */
    public function getXML(getXML $parameters)
    {
      return $this->__soapCall('getXML', array($parameters));
    }

    /**
     * @param getCFDI $parameters
     * @return getCFDIResponse
     */
    public function getCFDI(getCFDI $parameters)
    {
      return $this->__soapCall('getCFDI', array($parameters));
    }

    /**
     * @param getCFDISendPDF $parameters
     * @return getCFDISendPDFResponse
     */
    public function getCFDISendPDF(getCFDISendPDF $parameters)
    {
      return $this->__soapCall('getCFDISendPDF', array($parameters));
    }

    /**
     * @param getXMLProceso $parameters
     * @return getXMLProcesoResponse
     */
    public function getXMLProceso(getXMLProceso $parameters)
    {
      return $this->__soapCall('getXMLProceso', array($parameters));
    }

}
