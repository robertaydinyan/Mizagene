<?php

use yii\db\Migration;

/**
 * Class m230401_115807_Aram_migration
 */
class m230401_115807_Aram_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_profiles_list', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255)->notNull(),
            'name' => $this->string(),
            'height' => $this->integer(),
            'age' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'user_id' => $this->integer(),
        ]);

        $this->addColumn('user_profiles_list', 'w_size', "ENUM('Small', 'Medium', 'Large')");
        $this->addColumn('user_profiles_list', 'sex', "ENUM('Male', 'Female')");
        $this->addForeignKey('FK_profiles_user','user_profiles_list','user_id','user','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    } */

}
