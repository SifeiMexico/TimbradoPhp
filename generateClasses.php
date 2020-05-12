<?php
include_once 'vendor/autoload.php';
$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'http://devcfdi.sifei.com.mx:8080/SIFEI33/SIFEI?wsdl',
        'outputDir' => 'src/sifei/ws/soap/timbrado',
        'namespaceName' => 'DHF\Sifei\Ws\Soap\Timbrado',
        'constructorParamsDefaultToNull'=>true,
    ))
);
$generator = new \Wsdl2PhpGenerator\Generator();

$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'http://devcfdi.sifei.com.mx:8888/CancelacionSIFEI/Cancelacion?wsdl',
        'outputDir' => 'src/sifei/ws/soap/cancelacion',
        'namespaceName' => 'DHF\Sifei\Ws\Soap\Cancelacion',
        'constructorParamsDefaultToNull'=>true,
    ))
);