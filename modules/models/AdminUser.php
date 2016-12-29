<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "admin_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property integer $status
 * @property string $create_time
 */
class AdminUser extends \yii\db\ActiveRecord
{
    public $rememberMe;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash'], 'required'],
            [['status'], 'integer'],
            [['create_time'], 'safe'],
            [['username', 'password_hash', 'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'email' => 'Email',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }
}
