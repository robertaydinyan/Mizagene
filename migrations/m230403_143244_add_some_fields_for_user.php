<?php

use yii\db\Migration;

/**
 * Class m230403_143244_add_some_fields_for_user
 */
class m230403_143244_add_some_fields_for_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'email', $this->string(255));
        $this->addColumn('user', 'country', $this->string(255));
        $this->addColumn('user', 'usage_type', $this->string(255));

    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_143244_add_some_fields_for_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_143244_add_some_fields_for_user cannot be reverted.\n";

        return false;
    }
    */
}
