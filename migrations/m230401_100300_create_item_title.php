<?php

use yii\db\Migration;

/**
 * Class m230401_100300_create_item_title
 */
class m230401_100300_create_item_title extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item_title', [
            'id' => $this->primaryKey(),
            'languageID' => $this->integer(),
            'itemID' => $this->integer(),
            'title' => $this->string(),
            'description' => $this->string(),
            'title_temp' => $this->string(),
            'description_temp' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230401_100300_create_item_title cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_100300_create_item_title cannot be reverted.\n";

        return false;
    }
    */
}
