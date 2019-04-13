<?php
class DetallesCliente{
    private $detallesCliente;
    private $db;
    public function __construct(){
        $this->cliente = array();
        $this->db = new PDO('mysql:host=localhost;dbname=fraza_g', "root", "ferreyesc");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getCliente() {
        self::setNames();
        $sql = "SELECT id_cliente, nombre, apellido, direccion, telefono, correo FROM cliente";
        foreach ($this->db->query($sql) as $res) {
            $this->Cliente[] = $res;
        }
        return $this->cliente;
        $this->db = null;
       //
    }
    public function getDetallesCliente($id_cliente){
        self::setNames();

          $sql = " SELECT nombre, apellido, direccion, telefono, correo FROM cliente WHERE id_cliente = $id_cliente";
          foreach ($this->db->query($sql) as $res){
            $this->cliente[]=$res;
          }
              return $this->cliente;
              $this->db = null;
          } 
    }
      public function setCliente($nombre, $apellido, $correo, $direccion, $telefono) {
        self::setNames();
          $sql = "INSERT INTO cliente(nombre_cliente, apellido_cliente, correo, direccion, telefono)
          VALUES ('" . $nombre . "', '" . $apellido . "','" . $correo . "', '" . $direccion ."','" . $telefono . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          } 
}
?>
