<?php

use yii\db\Migration;

/**
 * Handles the creation of table `warehouse_info`.
 */
class m161229_050430_create_warehouse_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('warehouse_info', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'desc' => $this->text(),
            'address' => $this->string(),
            'contact'=>$this->string(),
            'phone' => $this->string(),
            'area' => $this->integer(6),
            'price' => $this->decimal(10,2),
            'create_time'=>$this->date(),
            'update_time' => $this->date(),
            'status' => $this->smallInteger(1)->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('warehouse_info');
    }
}
