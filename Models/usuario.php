<?php
class Usuario{
    private $usuario;
    private $db;
    public function __construct(){
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost; dbname=FG', "root", "");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getUsuarios() {
        self::setNames();
        $sql = "SELECT nombre, apellido, username, contrasena, rol FROM usuario";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }
    public function setUsuario($nombre, $apellido, $username, $contrasena, $rol) {
        self::setNames();
          $sql = "INSERT INTO usuario(nombre, apellido, username, contrasena, rol)
          VALUES ('" . $nombre . "', '" . $apellido . "','" . $username . "', '" . $contrasena ."','" . $rol . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
?>
