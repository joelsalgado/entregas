<?php

use yii\db\Migration;

/**
 * Class m180309_224426_add_column_prog_id_to_user
 */
class m180309_224426_add_column_prog_id_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'prog_id', $this->integer()->after('role'));

        $this->addForeignKey(
            'fk-ptog_user',
            'user',
            'prog_id',
            'cat_programas',
            'prog_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_224426_add_column_prog_id_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_224426_add_column_prog_id_to_user cannot be reverted.\n";

        return false;
    }
    */
}
