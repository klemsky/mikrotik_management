<?php
use PEAR2\Net\RouterOS;

header('Content-Type: text/plain');

try {
	$client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
    	$util = new RouterOS\Util($client);
    	foreach ($util->setMenu('/log')->getAll() as $entry) {
        	echo $entry('time') . ' ' . $entry('topics') . ' ' . $entry('message') . '<br>';
    	}
    	// echo $printRequest;
} catch (Exception $e) {
    // echo 'Unable to connect to RouterOS.';
    echo $e;
}
