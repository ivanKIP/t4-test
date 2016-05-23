<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464025975_createProducts
    extends Migration
{

    public function up()
    {
        $this->createTable('products', [
            'name'          => ['type' => 'string'],
            'price'         => ['type' => 'int'],
            '__category_id' => ['type' => 'link']
        ]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
    
}