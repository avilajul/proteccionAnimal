<?php

class BaseDatos
{

    private $conexion;
    private $servidor;
    private $usuario;
    private $password;
    private $bd;
    private $consulta;
    private $resultado;


	function BaseDatos()
    {
            
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->password = "root";
            $this->bd = "proteccion_animal";
	}

	public function conectar()
    { 
            /**
            * Descripción:Funcion que conecta a la base de datos
            * Argumentos: n/a
            * Retorno: n/a            
            */
            //if(!isset($this->conexion)){

		$this->conexion = (mysql_connect($this->servidor,$this->usuario,$this->password)) or die("Problemas en la Conexion: " + mysql_error());
		mysql_select_db($this->bd,$this->conexion) or die("Problemas en la conexion con la Base de Datos: " + mysql_error());        
		return $this->conexion;
            //}
        }

	public function desconectar()
    {
            /**
            * Descripción:Funcion que desconecta de la base de datos
            * Argumentos: n/a
            * Retorno: n/a            
            */
            mysql_close($this->conexion);
	}

	function ejecutar($query)
    {
            /**
            * Descripción:Funcion que ejecuta una query en la base de datos
            * Argumentos: $query (String)
            * Retorno: $sql (Consulta)            
            */
            $sql = $this->consulta = mysql_query($query,$this->conexion);
            return $sql;
        }
             
        function get_Datos()
        {
            /**
            * Descripción:Funcion que devuelve los datos de una consulta que se ejcuto
             *              Anteriormente, solo si fue una query de consulta.
            * Argumentos: n/a
            * Retorno: Datos (Arreglo de strings)            
            */
            $this->resultado = mysql_fetch_array($this->consulta);
            return $this->resultado;
        }

        
}

?>
