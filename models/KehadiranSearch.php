<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kehadiran;

/**
 * KehadiranSearch represents the model behind the search form about `app\models\Kehadiran`.
 */
class KehadiranSearch extends Kehadiran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['nama', 'alamat', 'hp', 'bbm', 'line', 'whatsapp', 'angkatan', 'created'], 'safe'],
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
        $query = Kehadiran::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['created' => SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'no' => $this->no,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'hp', $this->hp])
            ->andFilterWhere(['like', 'bbm', $this->bbm])
            ->andFilterWhere(['like', 'line', $this->line])
            ->andFilterWhere(['like', 'whatsapp', $this->whatsapp])
            ->andFilterWhere(['like', 'angkatan', $this->angkatan]);

        return $dataProvider;
    }
}
