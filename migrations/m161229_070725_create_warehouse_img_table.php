<?php

use yii\db\Migration;

/**
 * Handles the creation of table `warehouse_img`.
 */
class m161229_070725_create_warehouse_img_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('warehouse_img', [
            'id' => $this->primaryKey(),
            'url' => $this->string(500)->notNull(),
            'warehouse_id' => $this->integer(8)->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('warehouse_img');
    }
}
