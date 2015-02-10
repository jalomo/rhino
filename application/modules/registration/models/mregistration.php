<?php
/**

 **/
class mregistration extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }

    /*
	* metodo para guardar en una tabla.
	* $table=nombre de la tabla
	* $data= campos ej: $data['nombre']
	* autor: jalomo <jalomo@hotmail.es>
	*/
	public function save_register($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /*
	* encriptar la contraseña.
	* autor: jalom <jalomo@hotmail.es>
    */
    function encrypt_password($username, $password, $key)
	{
	    $pass = sha1($password.$key.$username);
	    return $pass;
	}

	/*
	* encriptar cadena.
	*
	*/
	function encrypt($string, $key) {
	   $result = '';
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)+ord($keychar));
	      $result.=$char;
	   }
	   return base64_encode($result);
	}

	/*
	* desencriptar
	*/
	function decrypt($string, $key) {
	   $result = '';
	   $string = base64_decode($string);
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)-ord($keychar));
	      $result.=$char;
	   }
	   return $result;
	}

}    
    