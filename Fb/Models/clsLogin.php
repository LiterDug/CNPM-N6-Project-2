<?php
require_once("clsDatabase.php");
class clsLogin
{
	public $db;
	public $data;
	function __construct()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	function CheckUser($user,$pass)
	{
		$sql = "SELECT * FROM users WHERE Username=? and Password=?";
		
		$data[] = $user;
		$data[] = $pass;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	function AddUser($username,$password){
		$sql = "INSERT INTO users VALUES (NULL, ?, ?)";

		$data[] = $username;
		$data[] = $password;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
}
?>