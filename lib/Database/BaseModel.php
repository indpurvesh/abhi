<?php

namespace Abhijit\Library\Database;

use PDO;
use  Abhijit\App\Config;

/**
 * Base model
 *
 */
abstract class BaseModel
{



    /**
     * Construct for the Abstract Model Class which connect the DB
     * 
     */
    public function __construct()
    {
        $this->db = $this->DBConnection();   
    }
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected function DBConnection()
    {
    
        if ($this->db === null) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
            $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
}
