<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Listings;

/**
 * ListingsSearch represents the model behind the search form of `frontend\models\Listings`.
 */
class ListingsSearch extends Listings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingsId', 'listingsTypeId', 'verificationStatus', 'bookingStatus', 'hasMaximumGuests', 'maximumGuests', 'hasAmmenities', 'allowInstantBooking', 'phoneCode', 'createdBy'], 'integer'],
            [['listingName', 'videoUrl', 'listingDesc', 'keywords', 'listingPhone', 'website', 'email', 'facebook', 'twitter', 'instagram', 'createdAt'], 'safe'],
            [['basePrice', 'deposit'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Listings::find();

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
            'listingsId' => $this->listingsId,
            'listingsTypeId' => $this->listingsTypeId,
            'basePrice' => $this->basePrice,
            'deposit' => $this->deposit,
            'verificationStatus' => $this->verificationStatus,
            'bookingStatus' => $this->bookingStatus,
            'hasMaximumGuests' => $this->hasMaximumGuests,
            'maximumGuests' => $this->maximumGuests,
            'hasAmmenities' => $this->hasAmmenities,
            'allowInstantBooking' => $this->allowInstantBooking,
            'phoneCode' => $this->phoneCode,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'listingName', $this->listingName])
            ->andFilterWhere(['like', 'videoUrl', $this->videoUrl])
            ->andFilterWhere(['like', 'listingDesc', $this->listingDesc])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'listingPhone', $this->listingPhone])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'instagram', $this->instagram]);

        return $dataProvider;
    }
}
