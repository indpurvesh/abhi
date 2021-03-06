<?php

namespace Abhijit\App\Controllers;

use Abhijit\Library\Controller\BaseController;
use Abhijit\Library\View\View;
use Abhijit\App\Service\GeoTopArtist;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends BaseController
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $apiService = new GeoTopArtist();
		$topGeoArtist = $apiService->getGeoTopArtist();
        
       
/*
// API Url
//$url = 'http://ws.audioscrobbler.com/2.0/?method=tag.gettopartists&tag=disco&perPage=100&page=2&api_key=bb873f48bd44d38b2cda7bf55ccca0dc&format=json';
$url = 'http://ws.audioscrobbler.com/2.0/?method=geo.gettopartists&country=australia&limit=5&api_key=bb873f48bd44d38b2cda7bf55ccca0dc&format=json';
// Put the value of parameters
$yourAPIKey = "bb873f48bd44d38b2cda7bf55ccca0dc";
$stamp = "";
$signature = "fd860f81c99ca4668d03531b34809a89";

$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('X-PCK: '. $yourAPIKey, 'X-Stamp: '. $stamp, 'X-Signature: '. $signature),
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => 1
));
$response = curl_exec($ch);
curl_close($ch);
// echo response output
*/
        return new View('Home/index.phtml',['artists' => $topGeoArtist,'home_url' => 'test']);
    }
}
