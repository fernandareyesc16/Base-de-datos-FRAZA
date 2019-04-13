class DetallesCliente{
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
        $sql = "SELECT nombre, apellido, direccion, telefono, correo FROM cliente";
        foreach ($this->db->query($sql) as $res) {
            $this->detallesCliente[] = $res;
        }
        return $this->detallesCliente;
        $this->db = null;
       //
    }
    public function updateGarantia($nombre, $apellido, $direccion, $telefono, $correo) {
        self::setNames();

          $sql = "UPDATE garantia(nombre, apellido, direccion, telefono, correo)
          SET ('" . $nombre . "', '" . $apellido . "','" . $direccion . "', '" . $telefono ."','" . $correo . "')";
          $result = $this->db->query($sql);
          if ($result) {
              return true;
          } else {
              return false;
          }
    }
}
