<?php
class DbConfig
{

    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'garantias_fraza';

    protected $connection;

    public function __construct(/*$usuario, $contrasena*/)
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username,$this->_password,$this->_database);

			if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
			}

            }

        return $this->connection;
    }


}
?>
