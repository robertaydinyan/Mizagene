<?php

use yii\db\Migration;

/**
 * Class m230330_214513_create_admin
 */
class m230330_214513_create_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'username' => $this->string(),
            'role' => $this->integer(),
            'password_hash' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'auth_key' => $this->string(),
            'accessToken' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_214513_create_admin cannot be reverted.\n";

        return false;
    }
    */
}
