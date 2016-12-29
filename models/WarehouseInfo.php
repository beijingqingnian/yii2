<?php

namespace app\models;

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
 * @property string $url
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 */
class WarehouseInfo extends \yii\db\ActiveRecord
{
    const STATUS_ENABLE = 1;//可用状态
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
            'name' => 'Name',
            'desc' => 'Desc',
            'address' => 'Address',
            'contact' => 'Contact',
            'phone' => 'Phone',
            'area' => 'Area',
            'price' => 'Price',
            'url' => 'img',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
        ];
    }

    /**
     * 获取仓库信息
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getWarehouseInfo(){
      return  WarehouseInfo::find()->where(['status'=>self::STATUS_ENABLE])->asArray()->all();
    }
}
