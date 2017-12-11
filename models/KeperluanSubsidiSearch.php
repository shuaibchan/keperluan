<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KeperluanSubsidi;

/**
 * KeperluanSubsidiSearch represents the model behind the search form about `app\models\KeperluanSubsidi`.
 */
class KeperluanSubsidiSearch extends KeperluanSubsidi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_keperluan', 'id_sub_wilayah'], 'integer'],
            [['tahun_keperluan', 'fasa_tanaman', 'bil_peladang', 'keluasan_daftar', 'keluasan_crf', 'npk', 'urea', 'grow_enhancer', 'baja_foliar', 'npk2', 'bajak', 'racun', 'kapasiti_stor'], 'safe'],
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
        $query = KeperluanSubsidi::find();

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
            'id_keperluan' => $this->id_keperluan,
            'id_sub_wilayah' => $this->id_sub_wilayah,
        ]);

        $query->andFilterWhere(['like', 'tahun_keperluan', $this->tahun_keperluan])
            ->andFilterWhere(['like', 'fasa_tanaman', $this->fasa_tanaman])
            ->andFilterWhere(['like', 'bil_peladang', $this->bil_peladang])
            ->andFilterWhere(['like', 'keluasan_daftar', $this->keluasan_daftar])
            ->andFilterWhere(['like', 'keluasan_crf', $this->keluasan_crf])
            ->andFilterWhere(['like', 'npk', $this->npk])
            ->andFilterWhere(['like', 'urea', $this->urea])
            ->andFilterWhere(['like', 'grow_enhancer', $this->grow_enhancer])
            ->andFilterWhere(['like', 'baja_foliar', $this->baja_foliar])
            ->andFilterWhere(['like', 'npk2', $this->npk2])
            ->andFilterWhere(['like', 'bajak', $this->bajak])
            ->andFilterWhere(['like', 'racun', $this->racun])
            ->andFilterWhere(['like', 'kapasiti_stor', $this->kapasiti_stor]);

        return $dataProvider;
    }
}
