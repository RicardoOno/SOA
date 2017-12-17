<?php
/**
 * Created by PhpStorm.
 * User: Tadashi
 * Date: 16/12/2017
 * Time: 20:13
 */

$client = new SoapClient('http://www.webservicex.net/ConverPower.asmx?WSDL');
$function = 'ChangePowerUnit';
$arguments= array('ConvertTemp' => array(
    'PowerValue'   => $_GET['pwValue'],
    'fromPowerUnit'      => $_GET['fromPowerUnit'],
    //'fromPowerUnit'      => 'megawatts',
    'toPowerUnit'      => $_GET['toPowerUnit'],
    //'toPowerUnit'      => 'kilowatts',
));
$options = array('location' => 'http://www.webservicex.net/ConverPower.asmx');
$result = $client->__soapCall($function, $arguments, $options);
echo 'Response: '.$result->ChangePowerUnitResult." kilowatts";

?>