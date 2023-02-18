<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Donations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'fund_id' => [ 'type' => 'INT'],
            'amount' => ['type' => 'DECIMAL' ],
            'donor' => ['type' => 'VARCHAR', 'contraint' => 255],
            'tip' => ['type' => 'DECIMAL']
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('donations');
    }

    public function down()
    {
        //
    }
}
