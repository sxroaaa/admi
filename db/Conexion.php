<?php

class Conexion {
    private $host;
    private $username;
    private $password;
    private $dbname;
    public $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $database;
    }

    public function connect() {
        // Establece la conexión a la base de datos
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Verifica si hay algún error en la conexión
        if ($this->connection->connect_error) {
            die("Error al conectar a la base de datos: " . $this->connection->connect_error);
        }

        echo "Conexión exitosa a la base de datos.";
    }

    public function close() {
        // Cierra la conexión a la base de datos
        $this->connection->close();

        echo "Conexión cerrada.";
    }

    
    public function getConexion() {
        return $this->connection;
    }
    
}
$host = "localhost";  
$username = "root"; 
$password = "12345";  
$database = "cencoe";



//$connection->close();
?>