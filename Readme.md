# ![Sifei](https://www.sifei.com.mx/web/image/res.company/1/logo?unique=38c7250)




# Ejemplos de timbrado y cancelación en PHP

Este repositorio incluye en ejemplos de los servicios SOAP de timbrado y cancelación de Sifei en en lenguaje PHP.

## Configuración de ejemplos



Los ejemplos se alimentan de un archivo config.ini para leer los datos de conexion, **No hacer esto en produccion**.
La url esta configurada al entorno de pruebas.

Para ejecutar estas pruebas debes solicitar tus accesos de QA(pruebas).

http://sifei.com.mx/

```ini
[timbrado]
UsuarioSIFEI = RFC # usuario sifei
PasswordSIFEI = 12345678a #password de usuario de sifei 
IdEquipoGenerado = f1563ce5 # ide equipo

[cancelacion]
PFX = CER_KEY.pfx    #Solo para el servicio de cancelacion
```
## Metodos con ejemplos

WS           | Método           |Descripción
------------ | -----------------|-------------
Timbrado     | `getCFDI()`      |Metodo para timbrar CFDI
Cancelación  | `cancelaCFDI()`  | Metodo para cancelar CFDI

## Ejemplos simples

Se incluyen ejemplos simples manuales para el servicio de timbrado y cancelacion.

## Ejemplos con Cliente de Sifei.

Ademas de los ejemplos simples, se incluyen 2 clases principales que agrupan las operaciones de los distintos servicios de SIFEI.

- SifeiTimbradoService
    - [getCFDIProcesa(getCFDIProcesa $parameters)](SIFEI_getCFDIProcesa)
    - [getCFDISign(getCFDISign $parameters)](SIFEI_getCFDISign)
    - [getCFDIAndURL(getCFDIAndURL $parameters)](SIFEI_getCFDIAndURL)
    - [getTimbreCFDI(getTimbreCFDI $parameters)](SIFEI_getTimbreCFDI)
    - [CambiaPassword(CambiaPassword $parameters)](SIFEI_CambiaPassword)
    - [cancelaCFDI(cancelaCFDI $parameters)](SIFEI_cancelaCFDI)
    - [cancelaCFDISectorPrimario(cancelaCFDISectorPrimario $parameters)](SIFEI_cancelaCFDISectorPrimario)
    - [cancelaCFDISignature(cancelaCFDISignature $parameters)](SIFEI_cancelaCFDISignature)
    - [getXML(getXML $parameters)](SIFEI_getXML)
    - [getCFDI(getCFDI $parameters)](SIFEI_getCFDI)
    - [getCFDISendPDF(getCFDISendPDF $parameters)](SIFEI_getCFDISendPDF)
    - [getXMLProceso(getXMLProceso $parameters)](SIFEI_getXMLProceso)


- SifeiCancelacionService
    - [cancelaCFDI(cancelaCFDI $parameters)](Cancelacion_cancelaCFDI)
    - [procesarRespuesta(procesarRespuesta $parameters)](Cancelacion_procesarRespuesta)
    - [cfdiRelacionado(cfdiRelacionado $parameters)](Cancelacion_cfdiRelacionado)
    - [peticionesPendientes(peticionesPendientes $parameters)](Cancelacion_peticionesPendientes)
    - [consultaSATCFDI(consultaSATCFDI $parameters)](Cancelacion_consultaSATCFDI)


# Timbrado:
<h2 id="SIFEI_getCFDIProcesa">Método getCFDIProcesa</h2>

### Request getCFDIProcesa
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDIProcesaResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getCFDISign">Método getCFDISign</h2>

### Request getCFDISign
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDISignResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_getTimbreCFDI">Método getTimbreCFDI</h2>

### Request getTimbreCFDI
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getTimbreCFDIResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_CambiaPassword">Método CambiaPassword</h2>

### Request CambiaPassword
|   Nombre  |   Tipo  |
|-----------|---------|
|Usuario    |xs:string|
|Password   |xs:string|
|NewPassword|xs:string|

### Response CambiaPasswordResponse
|Nombre|   Tipo   |
|------|----------|
|return|xs:boolean|

<h2 id="SIFEI_cancelaCFDISectorPrimario">Método cancelaCFDISectorPrimario</h2>

### Request cancelaCFDISectorPrimario
|   Nombre   |   Tipo  |
|------------|---------|
|usuarioSIFEI|xs:string|
|passUser    |xs:string|
|rfc         |xs:string|
|UUIDS       |xs:string|

### Response cancelaCFDISectorPrimarioResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getXML">Método getXML</h2>

### Request getXML
|Nombre|   Tipo  |
|----|---------|
|rfc |xs:string|
|pass|xs:string|
|hash|xs:string|

### Response getXMLResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getCFDI">Método getCFDI</h2>

### Request getCFDI
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDIResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_getXMLProceso">Método getXMLProceso</h2>

### Request getXMLProceso
|    Nombre   |   Tipo  |
|-------------|---------|
|rfc          |xs:string|
|pass         |xs:string|
|idseguimiento|xs:long  |

### Response getXMLProcesoResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|




# Cancelacion:
<h2 id="Cancelacion_procesarRespuesta">Método procesarRespuesta</h2>

### Request procesarRespuesta
|    Nombre   |      Tipo     |
|-------------|---------------|
|usuarioSIFEI |xs:string      |
|passwordSIFEI|xs:string      |
|rfcReceptor  |xs:string      |
|folios       |tns:folios     |
|pfx          |xs:base64Binary|
|passwordPfx  |xs:string      |

### Response procesarRespuestaResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_cfdiRelacionado">Método cfdiRelacionado</h2>

### Request cfdiRelacionado
|    Nombre   |      Tipo     |
|-------------|---------------|
|usuarioSIFEI |xs:string      |
|passwordSIFEI|xs:string      |
|rfcReceptor  |xs:string      |
|rfcEmisor    |xs:string      |
|uuid         |xs:string      |
|pfx          |xs:base64Binary|
|passwordPfx  |xs:string      |

### Response cfdiRelacionadoResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_peticionesPendientes">Método peticionesPendientes</h2>

### Request peticionesPendientes
|    Nombre   |   Tipo  |
|-------------|---------|
|usuarioSIFEI |xs:string|
|passwordSIFEI|xs:string|
|rfcReceptor  |xs:string|

### Response peticionesPendientesResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_consultaSATCFDI">Método consultaSATCFDI</h2>

### Request consultaSATCFDI
|    Nombre   |   Tipo  |
|-------------|---------|
|usuarioSIFEI |xs:string|
|passwordSIFEI|xs:string|
|id           |xs:string|
|re           |xs:string|
|rr           |xs:string|
|tt           |xs:string|
|fe           |xs:string|

### Response consultaSATCFDIResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|



## ¿Necesitas mas ejemplos?
Si necesitas mas ejemplos del resto de servicios favor de generar un nuevo issue