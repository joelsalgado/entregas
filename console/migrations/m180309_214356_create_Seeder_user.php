<?php

use yii\db\Migration;

/**
 * Class m180309_214356_create_Seeder_user
 */
class m180309_214356_create_Seeder_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user',[
            'id' => 1,
            'username' => 'admin',
            'name' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('12345'),
            'password_reset_token' => '',
            'email' => 'joelsalgado1302@gmail.com',
            'role' => 20,
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_214356_create_Seeder_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_214356_create_Seeder_user cannot be reverted.\n";

        return false;
    }
    */
}
