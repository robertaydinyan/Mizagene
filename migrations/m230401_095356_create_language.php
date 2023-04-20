<?php

use yii\db\Migration;

/**
 * Class m230401_095356_create_language
 */
class m230401_095356_create_language extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('language', [
            'id' => $this->primaryKey(),
            'language' => $this->string(),
            'short_code' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230401_095356_create_language cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_095356_create_language cannot be reverted.\n";

        return false;
    }
    */
}
