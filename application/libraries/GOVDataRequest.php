<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('UTC');

class GOVDataRequest
{
	static private $validArguments = Array(
		'top' => true,
		'skip' => true,
		'select' => true,
		'orderby' => true,
		'filter' => true
	);

	public $context;

	function __construct($context) {
		
		$this->context = $context;
	}

	// This method is responsible for constructing and submitting the request.
	// It returns a string if an error occured while submitting the request.
	// Otherwise, it returns an Array of instances of stdClass, each instance corresponsing to
	// a row of data from the dataset.  Each row has properties representing the datasets columns.
	function callAPI($method, $arguments = Array()) {

			$url = "{$this->context['apiHost']}/{$this->context['apiURL']}/$method?";
			$query = Array();
			
			foreach ($arguments as $key => $value) {
				if (array_key_exists($key, self::$validArguments)) {
					$query[] = "\$$key=" . urlencode($value);
				} else {
					$query[] = "$key=" . urlencode($value);
				}
			}
			$query = implode('&', $query);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url.$query);
			curl_setopt($ch, CURLOPT_HTTPHEADER, Array(
				"Authorization: {$this->authHeader($method, $query)}",
				"Accept: application/json"
			));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$results = curl_exec($ch);
			$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			//print_r($url.$query);exit;

			$results = json_decode($results);
			if ($code == '200') {
				$results = $results->d;
				//uncomment (var_dump($results); exit;) to parse raw data for verification...
				//var_dump($results); exit;
				if ($results instanceof stdClass) {
					if(isset($results->results))
						$results = $results->results;
				}
			} else {
				if(isset($results->error->message->value))
					$results = $results->error->message->value;
				else
					$results = "Connection to host failed.";
			}
			return $results;
	}

	private function timestamp() {
		return date('Y-m-d\TH:i:s\Z');
	}

	private function authHeader($method, $query) {
		$timestamp = $this->timestamp();
		return "Timestamp=$timestamp&ApiKey={$this->context['apiKey']}&Signature={$this->authSignature($timestamp, $method, $query)}";
	}

	private function authSignature($timestamp, $method, $query) {
		$dataToSign = "/{$this->context['apiURL']}/$method?$query";
		$dataToSign .= "&Timestamp=$timestamp&ApiKey={$this->context['apiKey']}";
		return hash_hmac('sha1', $dataToSign, $this->context['sharedSecret']);
	}
}
?>