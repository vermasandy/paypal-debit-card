<?php
 //echo "<pre>";
/** DoDirectPayment NVP example; 
 *
 *  Process a credit card payment. 
*/
 
$environment = 'sandbox';	// 'sandbox' or 'beta-sandbox' or 'live'
 
/**
 * Send HTTP POST Request
 *
 * @param	string	The API method name
 * @param	string	The POST Message fields in &name=value pair format
 * @return	array	Parsed HTTP Response body
 */
function PPHttpPost($methodName_, $nvpStr_) {
	global $environment;
 
	// Set up your API credentials, PayPal end point, and API version.
	$API_UserName = urlencode('sandeep.verma-facilitator_api1.kindlebit.com'); // set your spi username
	$API_Password = urlencode('ZTGQUN2Q69QZLF28'); // set your spi password
	$API_Signature = urlencode('AOCkmGl1oWWGeTZIBJEC..0vX6BMAgyeDh0VQnJ60tCeTCl-5dhT1deX'); // set your spi Signature
	
	$API_Endpoint = "https://api-3t.paypal.com/nvp";
	if("sandbox" === $environment || "beta-sandbox" === $environment) {
		$API_Endpoint = "https://api-3t.$environment.paypal.com/nvp";
	}
	$version = urlencode('51.0');
 
	// Set the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $API_Endpoint);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
 
	// Turn off the server and peer verification (TrustManager Concept).
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
 
	// Set the API operation, version, and API signature in the request.
	$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=$API_Password&USER=$API_UserName&SIGNATURE=$API_Signature$nvpStr_";
 
	// Set the request as a POST FIELD for curl.
	curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
 
	// Get response from the server.
	$httpResponse = curl_exec($ch);
 
	if(!$httpResponse) {
		exit("$methodName_ failed: ".curl_error($ch).'('.curl_errno($ch).')');
	}
 
	// Extract the response details.
	$httpResponseAr = explode("&", $httpResponse);
 
	$httpParsedResponseAr = array();
	foreach ($httpResponseAr as $i => $value) {
		$tmpAr = explode("=", $value);
		if(sizeof($tmpAr) > 1) {
			$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
		}
	}
 
	if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
		exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
	}
 
	return $httpParsedResponseAr;
}
 
// Set request-specific fields.
$paymentType = urlencode('Sale');				// 'Authorization' or 'Sale'
$firstName = urlencode($_POST['customer_first_name']);
$lastName = urlencode($_POST['customer_last_name']);
$creditCardType = urlencode($_POST['customer_credit_card_type']);
$creditCardNumber = urlencode($_POST['customer_credit_card_number']);
$expDateMonth = $_POST['cc_expiration_month'];
// Month must be padded with leading zero
$padDateMonth = urlencode(str_pad($expDateMonth, 2, '0', STR_PAD_LEFT));
 
$expDateYear = urlencode($_POST['cc_expiration_year']);
$cvv2Number = urlencode($_POST['cc_cvv2_number']);
$address1 = urlencode($_POST['customer_address1']);
//$address2 = urlencode($_POST['customer_address2']);
$city = urlencode($_POST['customer_city']);
$state = urlencode($_POST['customer_state']);
$zip = urlencode($_POST['customer_zip']);
$country = urlencode($_POST['customer_country']);				// US or other valid country code
$amount = urlencode($_POST['example_payment_amuont']);
$currencyID = urlencode('USD');							// or other currency ('GBP', 'EUR', 'JPY', 'CAD', 'AUD')
 
// Add request-specific fields to the request string.
$nvpStr =	"&PAYMENTACTION=$paymentType&AMT=$amount&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber".
			"&EXPDATE=$padDateMonth$expDateYear&CVV2=$cvv2Number&FIRSTNAME=$firstName&LASTNAME=$lastName".
			"&STREET=$address1&CITY=$city&STATE=$state&ZIP=$zip&COUNTRYCODE=$country&CURRENCYCODE=$currencyID";
 
// Execute the API operation; see the PPHttpPost function above.
$httpParsedResponseAr = PPHttpPost('DoDirectPayment', $nvpStr);
 
if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) {
	exit ('Direct Payment Completed Successfully: '.print_r($httpParsedResponseAr, true));
	//echo $timestamp = urldecode($httpParsedResponseAr['TIMESTAMP']);
	//echo $ack = $httpParsedResponseAr['ACK'];
	//echo $amt = urldecode($httpParsedResponseAr['AMT']);
	//echo $transactionId = urldecode($httpParsedResponseAr['TRANSACTIONID']);
} else  {
	exit('DoDirectPayment failed: ' . print_r($httpParsedResponseAr, true));
}
 
?>