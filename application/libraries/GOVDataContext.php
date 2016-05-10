<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('UTC');

// This class handles the storage of the host, API key, and Shared Secret for your GOVDataRequest
// objects.  A GOVDataContext is valid if it has values for host, key and secret.
class GOVDataContext
{
	public $apiHost = 'http://api.dol.gov';
	public $apiURL = 'V1';
	public $apiKey = 'add your own key';
	public $sharedSecret = 'NULL';
	public $apiUser = '';
	public $apiPass = '';

	public function __construct() {
		
	}

	public function isValid() {
		if ($this->apiHost == "http://api.dol.gov") {
			$valid = $this->apiHost;
			return $valid;
		} elseif ($this->apiHost == "http://business.usa.gov") {
			$valid = $this->apiHost;
			return $valid;
		}elseif ($this->apiHost == "http://quarry.dol.gov"){
			$valid = $this->apiHost;
			$this->apiURL = 'V2';
			return $valid;
		}
	}

	public function getContext(){
		$context = array (
			'apiHost' => $this->apiHost,
			'apiURL' => $this->apiURL,
			'apiKey' => $this->apiKey,
			'sharedSecret' => $this->sharedSecret 			
		);
		 return $context;
	}

}
?>