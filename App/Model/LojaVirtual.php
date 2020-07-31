<?php

namespace App\Model;

use MiniFramework\Model\Model;

class LojaVirtual extends Model {

	public function metodo() {

		$user = $_POST['user'];
		$password = base64_decode($_POST['password']);

		$data =

			$this->db->select('usuarios', ['username', 'password']) ??

			$this->db->select_where('usuarios', ['username' => $user, 'password' => $password], ['email', 'lastLogin']);

		return $data;
	}
}
