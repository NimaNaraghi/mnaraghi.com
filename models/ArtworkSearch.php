<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\artwork;

/**
 * ArtworkSearch represents the model behind the search form about `app\models\artwork`.
 */
class ArtworkSearch extends artwork
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'code', 'width', 'height', 'theme', 'category', 'style', 'technic', 'view'], 'integer'],
            [['title', 'description'], 'safe'],
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
        $query = artwork::find();

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
            'code' => $this->code,
            'width' => $this->width,
            'height' => $this->height,
            'theme' => $this->theme,
            'category' => $this->category,
            'style' => $this->style,
            'technic' => $this->technic,
            'view' => $this->view,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
