<?php 
    class Conexion {
        //properties
        private $server;
        private $user;
        private $password;
        private $db;
        public $con;
        //methods

        private function conexionDB() {
            $this->server = 'localhost';
            $this->user  = 'root';
            $this->password = '';
            $this->db = 'netflix';
            $con = mysqli_connect($this->server, $this->user, $this->password, $this->db);
            return $con;
        }

        public function getConexion() {
            return $this->conexionDB();
        }
    }
?>