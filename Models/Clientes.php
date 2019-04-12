
<?php

class Clientes{

    private $cliente;
    private $db;


    public function __construct(){
        $this->cliente = array();
        $this->db = new PDO('mysql:host=localhost;dbname=fraza_garantias', "root", "");
    }

    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }


    public function getClientes() {

        self::setNames();
        $sql = "SELECT nombre_cliente, apellido_cliente, correo, direccion, telefono FROM cliente";
        foreach ($this->db->query($sql) as $res) {
            $this->cliente[] = $res;
        }
        return $this->cliente;
        $this->db = null;
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
}
?>
