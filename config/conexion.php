<?php
    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try{
                $conectar=$this ->dbh= new PDO("mysql:host=34.68.196.220;dbname=g3_20","G3_20","tfc4C852");
                return $conectar;

            }catch (Exception $e){
                print "¡Error BD!: " .$e->get_Message() . "<br/>";
                die();

            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
    ?>