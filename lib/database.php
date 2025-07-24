<?php

use MongoDB\Client;
use MongoDB\Database;

require_once __DIR__ . '/../vendor/autoload.php'; //Obligatoire pour se connecter à MongoDB

class DatabaseConnection
{

    private ?Database $database = null;

    public function getConnected(): Database
    {
        if ($this->database === null) {
            $url = "mongodb://localhost:27017";
            $client = new Client($url);

            try {
                $this->database = $client->selectDatabase('testdb');
            } catch (MongoDB\Driver\Exception\Exception $e) {
                error_log('Erreur MongoDB : ' . $e->getMessage());
                throw new Exception('Connexion à la base de données impossible');
            }
        }

        return $this->database;
    }
}
