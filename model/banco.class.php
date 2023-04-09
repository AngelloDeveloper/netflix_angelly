<?php 
    class Banco extends Conexion {
       //properties
       private $sql;
       public $con;
       private $query;
       public $result;
       //methods
       public function __construct() {
            $this->con = $this->getConexion();
       } 

       public function getBancos() {
            $this->sql = "SELECT * FROM banco";
            $this->query = mysqli_query($this->con, $this->sql);
            if($this->query) {
                while($row = mysqli_fetch_assoc($this->query)) {
                    $this->result[] = $row;
                }
                return $this->result;
            }
       }    
    }
?>