<?php

use yii\db\Migration;

/**
 * Class m180130_211504_create_table_employee
 */
class m180130_211504_create_table_employee extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(11),
            'firstname' => $this->string(255)->notNull(),
            'lastname' => $this->string(255)->notNull(),
            'birthdate' => $this->date(),
            'city_id' => $this->integer(),
            'hiring_date' => $this->date()->notNull(),
            'department_id' => $this->integer(11),
            'email' => $this->string(255),
            'id_code' => $this->integer(11),
            'position' => $this->string(255),
        ]);
        $this->createIndex(
            'idx-employee-city_id',
            'employee',
            'city_id'
        );
        $this->addForeignKey(
            'fk-employee-city_id',
            'employee',
            'city_id',
            'city',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        $this->dropTable('employee');

        return false;
    }
}
