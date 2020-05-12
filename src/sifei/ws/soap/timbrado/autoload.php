<?php


 function autoload_7e3853d65d2e81d9a508e70d38439f76($class)
{
    $classes = array(
        'DHF\Sifei\Ws\Soap\Timbrado\SIFEIService' => __DIR__ .'/SIFEIService.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getXML' => __DIR__ .'/getXML.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getXMLResponse' => __DIR__ .'/getXMLResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\SifeiException' => __DIR__ .'/SifeiException.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDI' => __DIR__ .'/cancelaCFDI.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDIResponse' => __DIR__ .'/cancelaCFDIResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISignature' => __DIR__ .'/cancelaCFDISignature.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISignatureResponse' => __DIR__ .'/cancelaCFDISignatureResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDISign' => __DIR__ .'/getCFDISign.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDISignResponse' => __DIR__ .'/getCFDISignResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDIProcesa' => __DIR__ .'/getCFDIProcesa.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDIProcesaResponse' => __DIR__ .'/getCFDIProcesaResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDISendPDF' => __DIR__ .'/getCFDISendPDF.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDISendPDFResponse' => __DIR__ .'/getCFDISendPDFResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimario' => __DIR__ .'/cancelaCFDISectorPrimario.php',
        'DHF\Sifei\Ws\Soap\Timbrado\cancelaCFDISectorPrimarioResponse' => __DIR__ .'/cancelaCFDISectorPrimarioResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\CambiaPassword' => __DIR__ .'/CambiaPassword.php',
        'DHF\Sifei\Ws\Soap\Timbrado\CambiaPasswordResponse' => __DIR__ .'/CambiaPasswordResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDIAndURL' => __DIR__ .'/getCFDIAndURL.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDIAndURLResponse' => __DIR__ .'/getCFDIAndURLResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDI' => __DIR__ .'/getTimbreCFDI.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getTimbreCFDIResponse' => __DIR__ .'/getTimbreCFDIResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDI' => __DIR__ .'/getCFDI.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getCFDIResponse' => __DIR__ .'/getCFDIResponse.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getXMLProceso' => __DIR__ .'/getXMLProceso.php',
        'DHF\Sifei\Ws\Soap\Timbrado\getXMLProcesoResponse' => __DIR__ .'/getXMLProcesoResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7e3853d65d2e81d9a508e70d38439f76');

// Do nothing. The rest is just leftovers from the code generation.
{
}
