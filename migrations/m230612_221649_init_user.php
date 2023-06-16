<?php

use yii\db\Migration;

/**
 * Class m230612_221649_init_user
 */
class m230612_221649_init_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('password'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230612_221649_init_user cannot be reverted.\n";
        $this->delete('user', ['username' => 'admin']);
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230612_221649_init_user cannot be reverted.\n";

        return false;
    }
    */
}
