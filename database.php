<?php
// conexion con la bbdd
class database{
  //variables de la bbdd para conectarse
    private $host;
    private $db;
    private $user;
    private $password;
    public function __construct(){
      //comparacion con mis ajustes de la bbdd
        $this->host     = 'localhost';
        $this->db       = 'adat_aviones';
        $this->user     = 'root';
        $this->password = "";
    }
    function connect(){

        try{
            //funcion para la conexion
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            //comrobacion de la conexion
            $pdo = new PDO($connection,$this->user,$this->password);

            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}
?>
