<?php 
class Database{
    protected $db;

    // public function __construct()
    // {
    //     try{
    //         $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }


    public function __construct()
    {
        try{
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=selcukoz_v', 'selcukoz', 'cqu5Ef7T45');

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>