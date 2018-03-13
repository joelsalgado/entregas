<?php

use yii\db\Migration;

/**
 * Class m180312_212617_create_index_to_beneficiarios
 */
class m180312_212617_create_index_to_beneficiarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-name',
            'beneficiarios',
            'NOMBRES'
        );

        $this->createIndex(
            'idx-materno',
            'beneficiarios',
            'SEGUNDO_APELLIDO'
        );

        $this->createIndex(
            'idx-paterno',
            'beneficiarios',
            'PRIMER_APELLIDO'
        );

        $this->createIndex(
            'idx-id-tarjeta',
            'beneficiarios',
            'ID_TARJETA'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180312_212617_create_index_to_beneficiarios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180312_212617_create_index_to_beneficiarios cannot be reverted.\n";

        return false;
    }
    */
}
