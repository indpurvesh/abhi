<?php

namespace Abhijit\App\Service;

use Abhijit\App\Config;

class ArtistInfo extends Api
{

	protected $apiMethod;
	protected $limit;
	
	public function __construct()
    {
        $this->apiMethod = 'artist.getinfo'; 
		parent::__construct($this->apiMethod);
    }
    /**
     * Get all the Geo Top Artist and return as an array
     *
     * @return array
     */
    public function getArtistInfo($mbid='test')
    {
		$params = array('mbid'=>$mbid);
        $result = $this->callApi($params);
		/**
		 *Decode Json in Array and return to Controller
		 */
		$artists = json_decode($result,true);
		return $artists;
    }
}
