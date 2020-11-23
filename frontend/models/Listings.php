<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listings".
 *
 * @property int $listingsId
 * @property int $listingsTypeId
 * @property string $listingName
 * @property string $videoUrl
 * @property float $basePrice
 * @property float $deposit
 * @property string $listingDesc
 * @property int $verificationStatus Status 0 represents available, status 1 represents unavailable
 * @property int $bookingStatus Status 0 represents available, status 1 represents unavailable
 * @property int $hasMaximumGuests Status 0 represents yes, status 1 represents no
 * @property int|null $maximumGuests
 * @property int $hasAmmenities Status 0 represents yes, status 1 represents no
 * @property string|null $keywords
 * @property int $allowInstantBooking Status 0 represents true, status 1 represents false
 * @property int $phoneCode
 * @property string $listingPhone
 * @property string|null $website
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $instagram
 * @property int $createdBy
 * @property string $createdAt
 *
 * @property Booking[] $bookings
 * @property Bookmarks[] $bookmarks
 * @property Listingstypes $listingsType
 * @property User $createdBy0
 * @property Listingsammenities[] $listingsammenities
 * @property Listingsextraspricing[] $listingsextraspricings
 * @property Listingsimages[] $listingsimages
 * @property Listingslocations[] $listingslocations
 * @property Listingusers[] $listingusers
 * @property Llcategories[] $llcategories
 * @property Location[] $locations
 * @property Operatinghours[] $operatinghours
 * @property Reviews[] $reviews
 */
class Listings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingsTypeId', 'listingName', 'videoUrl', 'basePrice', 'deposit', 'listingDesc', 'phoneCode', 'listingPhone', 'createdBy'], 'required'],
            [['listingsTypeId', 'verificationStatus', 'bookingStatus', 'hasMaximumGuests', 'maximumGuests', 'hasAmmenities', 'allowInstantBooking', 'phoneCode', 'createdBy'], 'integer'],
            [['basePrice', 'deposit'], 'number'],
            [['listingDesc', 'keywords'], 'string'],
            [['createdAt'], 'safe'],
            [['listingName', 'videoUrl', 'website', 'email', 'facebook', 'twitter', 'instagram'], 'string', 'max' => 255],
            [['listingPhone'], 'string', 'max' => 100],
            [['listingsTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => Listingstypes::className(), 'targetAttribute' => ['listingsTypeId' => 'listingsTypeId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingsId' => 'Listings ID',
            'listingsTypeId' => 'Listings Type ID',
            'listingName' => 'Listing Name',
            'videoUrl' => 'Video Url',
            'basePrice' => 'Base Price',
            'deposit' => 'Deposit',
            'listingDesc' => 'Listing Desc',
            'verificationStatus' => 'Verification Status',
            'bookingStatus' => 'Booking Status',
            'hasMaximumGuests' => 'Has Maximum Guests',
            'maximumGuests' => 'Maximum Guests',
            'hasAmmenities' => 'Has Ammenities',
            'keywords' => 'Keywords',
            'allowInstantBooking' => 'Allow Instant Booking',
            'phoneCode' => 'Phone Code',
            'listingPhone' => 'Listing Phone',
            'website' => 'Website',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Bookmarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarks()
    {
        return $this->hasMany(Bookmarks::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[ListingsType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingsType()
    {
        return $this->hasOne(Listingstypes::className(), ['listingsTypeId' => 'listingsTypeId']);
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }

    /**
     * Gets query for [[Listingsammenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingsammenities()
    {
        return $this->hasMany(Listingsammenities::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Listingsextraspricings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingsextraspricings()
    {
        return $this->hasMany(Listingsextraspricing::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Listingsimages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingsimages()
    {
        return $this->hasMany(Listingsimages::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Listingslocations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingslocations()
    {
        return $this->hasMany(Listingslocations::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Listingusers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingusers()
    {
        return $this->hasMany(Listingusers::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Llcategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLlcategories()
    {
        return $this->hasMany(Llcategories::className(), ['listingId' => 'listingsId']);
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Operatinghours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperatinghours()
    {
        return $this->hasMany(Operatinghours::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['listingsId' => 'listingsId']);
    }
}
