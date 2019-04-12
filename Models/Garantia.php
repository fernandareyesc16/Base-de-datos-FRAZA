<?php
class Garantia{
    private $garantia;
    private $db;
    public function __construct(){
        $this->garantia = array();
        $this->db = new PDO('mysql:host=localhost;dbname=fraza_garantias', "root", "");
    }
    private function setNames() {
      return $this->db->query("SET NAMES 'utf8'");
    }
    public function getGarantias() {
        self::setNames();
        $sql = "SELECT cliente, fecha_creacion, monto_total, maquinaria, fase FROM garantia";
        foreach ($this->db->query($sql) as $res) {
            $this->garantia[] = $res;
        }
        return $this->garantia;
        $this->db = null;
    }
    public function setGarantia($cliente, $fechacreacion, $monto, $maquinaria, $fase) {
        self::setNames();
          $sql = "INSERT INTO garantia(cliente, fecha_creacion, monto_total, maquinaria, fase)
          VALUES ('" . $cliente . "', '" . $fechacreacion . "','" . $monto . "', '" . $maquinaria ."','" . $fase . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
?>
