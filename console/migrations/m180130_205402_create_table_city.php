<?php

use yii\db\Migration;

/**
 * Class m180130_205402_create_table_city
 */
class m180130_205402_create_table_city extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('city');

        return false;
    }
}
