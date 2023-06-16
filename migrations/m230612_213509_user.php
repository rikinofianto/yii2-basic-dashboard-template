<?php

use yii\db\Migration;

/**
 * Class m230612_213509_user
 */
class m230612_213509_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
        'id' => $this->primaryKey(),
        'username' => $this->string()->notNull()->unique(),
        'auth_key' => $this->string(32),
        'password_hash' => $this->string()->notNull(),
        'password_reset_token' => $this->string()->unique(),
        'email' => $this->string()->notNull()->unique(),
        'status' => $this->smallInteger()->notNull()->defaultValue(10),
        'created_at' => $this->integer()->notNull(),
        'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230612_213509_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230612_213509_user cannot be reverted.\n";

        return false;
    }
    */
}
