<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form about `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'yuding_time', 'yuding_shuliang', 'sendmail', 'status', 'paytype'], 'integer'],
            [['shouqian_name', 'shouqian_phone', 'shouhuo_name', 'shouhuo_phone', 'shouhuo_dizhi', 'shouhuo_menpai', 'yuding_shangpin', 'tradeno'], 'safe'],
            [['zongjia'], 'number'],
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
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>[
                'defaultOrder'=>[
                    'yuding_time'=>SORT_DESC
                ]
            ]
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
            'yuding_time' => $this->yuding_time,
            'yuding_shuliang' => $this->yuding_shuliang,
            'zongjia' => $this->zongjia,
            'sendmail' => $this->sendmail,
            'status' => $this->status,
            'paytype' => $this->paytype,
        ]);

        $query->andFilterWhere(['like', 'shouqian_name', $this->shouqian_name])
            ->andFilterWhere(['like', 'shouqian_phone', $this->shouqian_phone])
            ->andFilterWhere(['like', 'shouhuo_name', $this->shouhuo_name])
            ->andFilterWhere(['like', 'shouhuo_phone', $this->shouhuo_phone])
            ->andFilterWhere(['like', 'shouhuo_dizhi', $this->shouhuo_dizhi])
            ->andFilterWhere(['like', 'shouhuo_menpai', $this->shouhuo_menpai])
            ->andFilterWhere(['like', 'yuding_shangpin', $this->yuding_shangpin])
            ->andFilterWhere(['like', 'tradeno', $this->tradeno]);

        return $dataProvider;
    }
}
