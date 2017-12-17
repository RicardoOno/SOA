<?php

$client = new SoapClient('http://www.webservicex.net/convertMetricWeight.asmx?WSDL');
$function = 'ChangeMetricWeightUnit';
$arguments= array('ConvertTemp' => array(
    'MetricWeightValue'   => $_GET['kg'],
    'fromMetricWeightUnit'      => 'kilogram',
    'toMetricWeightUnit'      => 'gram',
));
$options = array('location' => 'http://www.webservicex.net/convertMetricWeight.asmx');
$result = $client->__soapCall($function, $arguments, $options);
echo 'Response: '.$result->ChangeMetricWeightUnitResult." gramas";


?>
