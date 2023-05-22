<?php

use yii\db\Migration;

/**
 * Class m230330_203144_create_items
 */
class m230330_203144_create_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('items', [
            'id' => $this->primaryKey(),
            'e2e_item_id' => $this->integer()->null(),
            'item_id' => $this->integer()->null(),
            'i_type' => $this->string()->null(),
            'i_usg_type' => $this->string()->null(),
            'i_comb_type_id' => $this->string()->null(),
            'e2e_item_ru' => $this->string()->null(),
            'e2e_i_description_ru' => $this->string()->null(),
            'e2e_item_en' => $this->string()->null(),
            'e2e_i_description_en' => $this->string()->null(),
            'e2e_item_ir' => $this->string()->null(),
            'e2e_i_description_ir' => $this->string()->null(),
            'i_result_sector1_colorid' => $this->integer()->null(),
            'i_result_sector2_colorid' => $this->integer()->null(),
            'i_result_sector3_colorid' => $this->integer()->null(),
            'i_result_sector4_colorid' => $this->integer()->null(),
            'i_result_sector5_colorid' => $this->integer()->null(),
            'i_result_sector6_colorid' => $this->integer()->null(),
            'i_result_sector7_colorid' => $this->integer()->null(),
            'i_result_sector8_colorid' => $this->integer()->null(),
            'i_result_sector9_colorid' => $this->integer()->null(),
            'i_result_sector10_colorid' => $this->integer()->null(),
            'source' => $this->integer()->defaultValue(0),
            'stage' => $this->integer()->defaultValue(0),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(){
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_203144_create_items cannot be reverted.\n";

        return false;
    }
    */
}
