<?php 
class BicicletaModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bici_db;charset=utf8','root','');
    }

    function GetDatos($id){
        $sentencia = $this->db->prepare("SELECT * FROM bicicleta WHERE id_bici=?");
        $sentencia->execute(array($id));
        $datos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $datos;
    }

    function GetCantidad(){
        $sentencia = $this->db->prepare("SELECT bicicleta");
        return $cantidad;
    }
}

?>