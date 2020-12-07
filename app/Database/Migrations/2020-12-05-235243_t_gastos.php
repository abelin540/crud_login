<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TGastos extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_gasto'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'concepto_de_gasto'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '500',
                        ],

                        'monto_de_gasto'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '500',
                        ],
                        'fecha' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
						],
						
						
                ]);
                $this->forge->addKey('id_gasto', true);
                $this->forge->createTable('t_gastos');
        }

        public function down()
        {
                $this->forge->dropTable('t_gastos');
        }
}
