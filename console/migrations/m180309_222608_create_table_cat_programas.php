<?php

use yii\db\Migration;

/**
 * Class m180309_222608_create_table_cat_programas
 */
class m180309_222608_create_table_cat_programas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cat_programas', [
            'id' => $this->primaryKey(),
            'prog_id' => $this->integer()->notNull()->unique(),
            'prog_desc' => $this->string(120),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cat_programas');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_222608_create_table_cat_programas cannot be reverted.\n";

        return false;
    }
    */
}
