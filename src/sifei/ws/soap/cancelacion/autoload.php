<?php


 function autoload_16410f6a435523137e2996ebb3ee1a97($class)
{
    $classes = array(
        'DHF\Sifei\Ws\Soap\Cancelacion\Cancelacion' => __DIR__ .'/Cancelacion.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuesta' => __DIR__ .'/procesarRespuesta.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\folios' => __DIR__ .'/folios.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\procesarRespuestaResponse' => __DIR__ .'/procesarRespuestaResponse.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\sifeiServiceFault' => __DIR__ .'/sifeiServiceFault.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDI' => __DIR__ .'/consultaSATCFDI.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\consultaSATCFDIResponse' => __DIR__ .'/consultaSATCFDIResponse.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\peticionesPendientes' => __DIR__ .'/peticionesPendientes.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\peticionesPendientesResponse' => __DIR__ .'/peticionesPendientesResponse.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI' => __DIR__ .'/cancelaCFDI.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDIResponse' => __DIR__ .'/cancelaCFDIResponse.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionado' => __DIR__ .'/cfdiRelacionado.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\cfdiRelacionadoResponse' => __DIR__ .'/cfdiRelacionadoResponse.php',
        'DHF\Sifei\Ws\Soap\Cancelacion\respuesta' => __DIR__ .'/respuesta.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_16410f6a435523137e2996ebb3ee1a97');

// Do nothing. The rest is just leftovers from the code generation.
{
}
