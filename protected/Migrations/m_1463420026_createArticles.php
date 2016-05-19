<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1463420026_createArticles
    extends Migration
{

    public function up()
    {
        $this->createTable('articles', [
            'title'     => ['type'  => 'string'],
            'text'      => ['type'  => 'text'],
            'dateTime'  => ['type'  => 'datetime']
        ]);
    }

    public function down()
    {
        $this->dropTable('articles');
    }
    
}