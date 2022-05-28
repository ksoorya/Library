<?php
class database{
    
    public static $conn=null;


    public static function getconnection(){
        if(database::$conn == null){
            
            $connection = new mysqli(get_config("servername"),get_config("username"),get_config("password"));
            // Check connection
            if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
            }
            echo "Connected successfully";
            database::$conn = $connection;
            return database::$conn;
        }
     
        else{
            return  database::$conn;
        }

    }

}




?>