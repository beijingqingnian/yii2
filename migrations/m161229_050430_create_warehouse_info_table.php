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
            'name' => $this->string(200)->notNull(),
            'desc' => $this->text(),
            'address' => $this->string(300),
            'contact'=>$this->string(100),
            'phone' => $this->string(100),
            'area' => $this->integer(6),
            'price' => $this->decimal(10,2),
            'create_time'=>$this->dateTime(),
            'url'=>$this->string(200)->notNull()->defaultValue(''),
            'update_time' => $this->dateTime(),
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
