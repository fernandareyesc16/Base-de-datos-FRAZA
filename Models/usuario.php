<?php
class Usuario{
    private $usuario;
    private $db;
    public function __construct(){
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost; dbname=garantias_fraza', "root", "");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getUsuarios() {
        self::setNames();
        $sql = "SELECT nombre, apellido, username, rol FROM empleado";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }
    public function setUsuario($nombre, $apellido, $username,  $rol) {
        self::setNames();
          $sql = "INSERT INTO empleado(nombre, apellido, username, rol)
          VALUES ('" . $nombre . "', '" . $apellido . "','" . $username . "','" . $rol . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
?>
