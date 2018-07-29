<?php
namespace Abhijit\App\Service;

use Abhijit\Library\Model;
use Abhijit\App\Config;

class Api
{
	protected $apiMethod;
	protected $apiPath;
	protected $apiKey;
	protected $apiSignature;
	
	protected function __construct($apiMethod)
    {
        $this->apiMethod= 	$apiMethod; 
		$this->apiPath  = 	Config::LASTFM_API_URL;
		$this->apiKey	=	Config::LASTFM_API_KEY;
		$this->apiSignature	=	Config::LASTFM_API_SIGNATURE;
    }

    /**
     * Call API and get JSON
     *
     * @return curl JSON
     */
    protected function callApi($params = array())
    {
		//echo "Asdf";die();
        // API Url
		//$url = 'http://ws.audioscrobbler.com/2.0/?method=tag.gettopartists&tag=disco&perPage=100&page=2&api_key=bb873f48bd44d38b2cda7bf55ccca0dc&format=json';
		if(!(isset($this->apiKey) && $this->apiKey) || !(isset($this->apiSignature) && $this->apiSignature) )
			return "Invalid API Key and Signature.";
		if(isset($this->apiMethod)&& $this->apiMethod!='')
		{
			$url = $this->apiPath.'?method='.$this->apiMethod;
			$url .= '&api_key='.$this->apiKey;
			foreach($params as $key=>$value)
			{
				$url .= '&'.$key.'='.$value;
			}
			$url .= '&format=json';
			//$url = 'http://ws.audioscrobbler.com/2.0/?method=geo.gettopartists&country=australia&limit=5&api_key=bb873f48bd44d38b2cda7bf55ccca0dc&format=json';
			// Put the value of parameters
			//$APIKey = "bb873f48bd44d38b2cda7bf55ccca0dc";
			$stamp = "";
			//$signature = "fd860f81c99ca4668d03531b34809a89";
			
			$ch = curl_init($url);
			curl_setopt_array($ch, array(
				CURLOPT_HTTPHEADER  => array('X-PCK: '. $this->apiKey, 'X-Stamp: '. $stamp, 'X-Signature: '. $this->apiSignature),
				CURLOPT_RETURNTRANSFER  =>true,
				CURLOPT_VERBOSE     => 1
			));
			$response = curl_exec($ch);
			curl_close($ch);
			return $response;
		}
		return "Invalid API method passed.";
    }
}
