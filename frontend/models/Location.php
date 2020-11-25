<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $locationId
 * @property int $listingsId
 * @property string $address
 * @property string $country
 * @property string $county
 * @property string $city
 * @property string $street
 * @property float $lattitude
 * @property float $longitude
 * @property string $vicinity
 * @property int $createdAt
 *
 * @property Listings $listings
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingsId', 'address', 'country', 'county', 'city', 'street', 'lattitude', 'longitude', 'vicinity', 'createdAt'], 'required'],
            [['listingsId', 'createdAt'], 'integer'],
            [['lattitude', 'longitude'], 'number'],
            [['createdAt'], 'safe'],
            [['address', 'country', 'county', 'city', 'street', 'vicinity'], 'string', 'max' => 255],
            [['listingsId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingsId' => 'listingsId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'listingsId' => 'Listings ID',
            'address' => 'Address',
            'country' => 'Country',
            'county' => 'County',
            'city' => 'City',
            'street' => 'Street',
            'lattitude' => 'Lattitude',
            'longitude' => 'Longitude',
            'vicinity' => 'Vicinity',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasOne(Listings::className(), ['listingsId' => 'listingsId']);
    }
}
