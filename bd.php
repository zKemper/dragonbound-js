<?php
error_reporting(0);
define('HOSTx','localhost');
define('BDx','game');
define('USERx','root');
define('PASSx','');

class BD {
    
    private static $conn;
    public function __construct(){}
    
    public function conn(){
        if(is_null(self::$conn)){
            self::$conn =  new PDO('mysql:host=' . HOSTx .';dbname=' . BDx , USERx , PASSx );
        }
        
        return self::$conn;
    }
    
    
    
    
    
}
