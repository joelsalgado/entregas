<?php

use yii\db\Migration;

/**
 * Class m180309_224831_create_table_beneficiarios
 */
class m180309_224831_create_table_beneficiarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('beneficiarios', [
            'FOLIO' => $this->primaryKey(),
            'CVE_PROGRAMA' => $this->integer(),
            'N_PERIODO' => $this->integer(),
            'NOMBRES' => $this->string(80),
            'SEGUNDO_APELLIDO' => $this->string(80),
            'PRIMER_APELLIDO' => $this->string(80),
            'CVE_REGION' => $this->integer(),
            'REGIONDESCRIPCION' => $this->string(30),
            'CVE_MUNICIPIO' => $this->integer(),
            'MUNICIPIONOMBRE' => $this->string(50),
            'TARJETA' => $this->string(20),
            'ID_TARJETA' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_224831_create_table_beneficiarios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_224831_create_table_beneficiarios cannot be reverted.\n";

        return false;
    }
    */
}
