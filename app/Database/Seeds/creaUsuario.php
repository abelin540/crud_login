<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaUsuario extends Seeder
{
	public function run()
	{
	$contra ='124';
	$contra= password_hash($contra, PASSWORD_DEFAULT);
	
	$data =[

		"nombre"=>'abelin',
		"apellidopaterno"=>'sanchez',
		"email"=>'iphone4s54@gmail.com',



		"usuario"=>'admi',
		"password" =>$contra,
		"tipo"=>'administrador'];
		$this->db->table('t_usuario')->insert($data);
	
	}
}
