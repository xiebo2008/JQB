<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Healtharticle;

/**
 * HealtharticleSearch represents the model behind the search form about `app\models\Healtharticle`.
 */
class HealtharticleSearch extends Healtharticle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_time', 'updated_time', 'status', 'stick'], 'integer'],
            [['author', 'content', 'title', 'summary'], 'safe'],
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
        $query = Healtharticle::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>[
                'defaultOrder'=>[
                    'updated_time'=>SORT_DESC
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
            'created_time' => $this->created_time,
            'updated_time' => $this->updated_time,
            'status' => $this->status,
            'stick' => $this->stick,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'summary', $this->summary]);

        return $dataProvider;
    }
}
