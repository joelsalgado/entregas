<?php

use yii\db\Migration;

/**
 * Class m180309_234059_create_table_entregas
 */
class m180309_234059_create_table_entregas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('entregas', [
            'id' => $this->primaryKey(),
            'FOLIO' => $this->integer(),
            'CVE_PROGRAMA' => $this->integer(),
            'N_PERIODO' => $this->integer(),
            'status_canasta' => $this->smallInteger()->notNull()->defaultValue(0),
            'status_comprobante' => $this->smallInteger()->notNull()->defaultValue(0),
            'fecha' => $this->date(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ]);


        $this->addForeignKey(
            'fk-beneficiario-entrega',
            'entregas',
            'FOLIO',
            'beneficiarios',
            'FOLIO',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_234059_create_table_entregas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_234059_create_table_entregas cannot be reverted.\n";

        return false;
    }
    */
}
