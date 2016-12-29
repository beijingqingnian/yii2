<?php

namespace app\modules\models;

use Yii;
use yii\web\UploadedFile;

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
    public static $status_list = [0=>'禁用',1=>'启用'];

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
            [['url'],'file'],
            [['create_time', 'update_time'], 'safe'],
            [['create_time', 'update_time'], 'default','value'=>date('Y-m-d H:i:s')],
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
            'url'=>'图片',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
            'status' => '状态',
        ];
    }
}
