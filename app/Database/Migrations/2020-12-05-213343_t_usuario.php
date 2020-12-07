<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuario extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_usuario'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
						],
						
						'nombre'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
					],
                        'apellido paterno'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
						],
						
						'email'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
					],
                        'usuario' => [
                                'type'           => 'TEXT',
                                'constraint'     => '250',
						],

						'password'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
					],
						
						'tipo'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
					],
                ]);
                $this->forge->addKey('id_usuario', true);
                $this->forge->createTable('t_usuario');
        }

        public function down()
        {
                $this->forge->dropTable('t_usuario');
        }
}