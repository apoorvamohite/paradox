<?php
require "init.php";
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
$from = $_POST['from'];
$to = $_POST['to'];

$sql = "SELECT orderID FROM attemptedTxn WHERE slno>=$from AND slno<=$to AND active=0";
$res= mysqli_query($con, $sql);

while($row= mysqli_fetch_assoc($res)){
	$ORDER_ID=$row['orderID'];
	$requestParamList = array();
	$responseData = array();

	// Create an array having all required parameters for status query.
	$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
	    
	$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
	    
	$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

	// Call the PG's getTxnStatusNew() function for verifying the transaction status.
	$responseData = getTxnStatusNew($requestParamList);
}

?>