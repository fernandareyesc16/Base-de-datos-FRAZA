<?php
class Maquinaria{
    private $maquinaria;
    private $db;
    public function __construct(){
        $this->maquinaria = array();
        $this->db = new PDO('mysql:host=localhost;dbname=fraza_garantias', "root", "");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getMaquinaria() {
        self::setNames();
        $sql = "SELECT modelo, numero_de_serie, marca, fecha_de_compra FROM maquinaria";
        foreach ($this->db->query($sql) as $res) {
            $this->maquinaria[] = $res;
        }
        return $this->maquinaria;
        $this->db = null;
    }
    public function setCliente($modelo, $numero_de_serie, $marca, $fecha_de_compra) {
        self::setNames();
          $sql = "INSERT INTO maquinaria(modelo, numero_de_serie, marca, fecha_de_compra) 
          VALUES ('" . $modelo . "', '" . $numero_de_serie . "','" . $marca . "', '" . $fecha_de_compra . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
?>