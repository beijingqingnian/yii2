<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin_user`.
 */
class m161221_135855_create_admin_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('admin_user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(200)->notNull()->unique(),
            'password_hash' => $this->string(256)->notNull(),
            'email' => $this->string(100),
            'status' => $this->integer(1)->defaultValue(0),
            'create_time' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('admin_user');
    }
}
