<?php

use yii\db\Migration;

/**
 * Class m230403_143054_create_sign_up_company
 */
class m230403_143054_create_sign_up_company extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255)->notNull(),
            'name' => $this->string(),
            'company_name' => $this->string(),
            'email' => $this->string(),
            'password' => $this->string(),
            'phone_number' => $this->integer(),
            'company_residence' => $this->string(),
            'position' => $this->string(),
            'field_of_activity' => $this->string(),
            'employees_quantity' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_143054_create_sign_up_company cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_143054_create_sign_up_company cannot be reverted.\n";

        return false;
    }
    */
}
