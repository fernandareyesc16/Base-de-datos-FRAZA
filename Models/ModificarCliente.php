<?php
class ModificarsCliente{
    private $detallesCliente;
    private $db;
    public function __construct(){
        $this->garantia = array();
        $this->db = new PDO('mysql:host=localhost;dbname=fraza_g', "root", "ferreyesc");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getDetallesCliente() {
        self::setNames();
        $sql = "SELECT id_cliente, nombre, apellido, direccion, telefono, correo FROM cliente";
        foreach ($this->db->query($sql) as $res) {
            $this->modificarCliente[] = $res;
        }
        return $this->modificarCliente;
        $this->db = null;
       //
    }
    public function updateCliente($nombre, $apellido, $direccion, $telefono, $correo, $id_cliente) {
        self::setNames();

          $sql = "UPDATE garantia SET nombre = $nombre, apellido = $apellido, direccion = $direccion, telefono = $telefono, correo = $correo WHERE id_cliente = $id_cliente";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
?>
