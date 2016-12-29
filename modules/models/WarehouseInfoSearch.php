<?php

namespace app\modules\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\WarehouseInfo;

/**
 * WarehouseInfoSearch represents the model behind the search form about `app\modules\models\WarehouseInfo`.
 */
class WarehouseInfoSearch extends WarehouseInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'area', 'status'], 'integer'],
            [['name', 'desc', 'address', 'contact', 'phone', 'create_time', 'update_time'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = WarehouseInfo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'area' => $this->area,
            'price' => $this->price,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
