<?php

use MongoDB\Client;
use MongoDB\Database;
use MongoDB\Collection;
use MongoDB\Exception\Exception;

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
            } catch (Exception $e) {
                error_log('Erreur MongoDB : ' . $e->getMessage());
                throw new Exception('Connexion à la base de données impossible');
            }
        }

        return $this->database;
    }

    public function getCollection(string $dbName, string $collectionName): Collection{
        return $this->getConnected()->selectCollection($dbName, $collectionName);
    }
}
