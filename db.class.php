<?php
// author Pape Adama MBOUP 2016
Class DB {
	private $host = 'localhost';
	private $username = 'root'; 	// username
	private $password = '';			// le mot de passe de la bd
	private $database = 'sesame_base';			// mettre le nom de la bd
	
	private $db;
	
	public function __construct($host = null, $username = null, $password = null, $database = null){
		if($host != null){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		try{ $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password,
									array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		}catch (Exception $e) {
			die('<h1>Impossible de se connecter à la base de données</h1> : '.$e->getMessage());
		}


	}
	public function query2($sql, $data = array(), $close = 1){
		$query = $this->db->prepare($sql);
     $query->execute($data);
		if($close == 1) $query->closeCursor();
		return $query;	
	}
	
	public function fetchAllObject($query, $close = 1){
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if($close == 1) $query->closeCursor();
		return $result;	
	}
	public function fetchAllArray($query, $close = 1){
		$result = $query->fetchAll();
		if($close == 1) $query->closeCursor();
		return $result;	
	}

	public function prepare($sql){
		return $this->db->prepare($sql);
	}

	public function executePrepared($prepare, $data = array()){
		return $prepare->execute($data);
	}
	public function isExisteLogin($login){
		$req=$this->prepare("select login from users where login = :login limit 1");
		$req->execute(array('login'=>$login));
		$resultat = $req->fetch();	$req->closeCursor();
		return $resultat['login'] == $login;
	}
	//on peut mettre d'autres fonctions ici
}