<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "warehouse_info".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $address
 * @property string $contact
 * @property string $phone
 * @property integer $area
 * @property string $price
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 */
class WarehouseInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouse_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['desc'], 'string'],
            [['area', 'status'], 'integer'],
            [['price'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'address', 'contact', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'desc' => '描述',
            'address' => '地址',
            'contact' => '联系人',
            'phone' => '电话',
            'area' => '面积',
            'price' => '单位价格',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
            'status' => '状态',
        ];
    }
}
