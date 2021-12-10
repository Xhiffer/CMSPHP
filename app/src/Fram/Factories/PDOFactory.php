<?php

namespace App\Fram\Factories;
use PDO;
class PDOFactory
{
    public static function getMysqlConnection()
    {
        $user = 'root';
        $pass = 'example';
        try {
            $db = new PDO('mysql:host=db;dbname=livredb2',$user,$pass);
        }
        catch (PDOExpection $e){
            $error_message = $e ->getmessage();
            exit();

        }
        return $db;
    }
}

