<?php

use yii\db\Migration;

/**
 * Class m230331_215218_create_region
 */
class m230331_215218_create_region extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('region', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230331_215218_create_region cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230331_215218_create_region cannot be reverted.\n";

        return false;
    }
    */
}
