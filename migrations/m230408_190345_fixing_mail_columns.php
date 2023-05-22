<?php

use yii\db\Migration;

/**
 * Class m230408_190345_fixing_mail_columns
 */
class m230408_190345_fixing_mail_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'email', $this->string(255));
        $this->addColumn('company', 'email', $this->string(255));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'mail');
        $this->dropColumn('company', 'mail');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230408_190345_fixing_mail_columns cannot be reverted.\n";

        return false;
    }
    */
}
