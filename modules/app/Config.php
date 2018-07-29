<?php

namespace Abhijit\App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'your-database-host';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'your-database-name';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'your-database-user';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'your-database-password';
	
	/**
     * API URL
     * @var string
     */
	const LASTFM_API_URL = 'http://ws.audioscrobbler.com/2.0/';
	/**
     * API Key
     * @var string
     */
	const LASTFM_API_KEY = 'bb873f48bd44d38b2cda7bf55ccca0dc';
	
	/**
     * API Signature
     * @var string
     */
	const LASTFM_API_SIGNATURE = 'fd860f81c99ca4668d03531b34809a89';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
	
	/**
     * Default Country
     * @var String
     */
    const DEFAULT_COUNTRY = 'Australia';
	
	/**
     * Root URL
     * @var String
     */
    const HOME_URL = 'http://localhost:8000/';
}
