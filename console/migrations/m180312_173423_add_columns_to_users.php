<?php

use yii\db\Migration;

/**
 * Class m180312_173423_add_columns_to_users
 */
class m180312_173423_add_columns_to_users extends Migration
{

    public function safeUp()
    {
        $this->addColumn('user', 'updated_by', $this->integer()->after('created_at'));
        $this->addColumn('user', 'created_by', $this->integer()->after('created_at'));
    }


    public function safeDown()
    {
        echo "m180312_173423_add_columns_to_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180312_173423_add_columns_to_users cannot be reverted.\n";

        return false;
    }
    */
}
