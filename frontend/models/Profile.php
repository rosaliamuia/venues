<?php

namespace frontend\models;

use Yii;
use common\models\User;


/**
 * This is the model class for table "profiles".
 *
 * @property int $profileId
 * @property int $userId
 * @property string $firstName
 * @property string $lastName
 * @property string $profilePic
 * @property int $countryId
 * @property string $phoneNumber
 * @property int $currencyId
 * @property string $email
 * @property string $website
 * @property string $twitter
 * @property string $fb
 * @property string $googlePlus
 * @property int $createdBy
 * @property string $createdAt
 *
 * @property Profileimage[] $profileimages
 * @property User $user
 * @property Country $country
 * @property Currency $currency
 * @property User $createdBy0
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'firstName', 'lastName','phoneNumber', 'email', 'createdBy'], 'required'],
            [['userId', 'countryId', 'currencyId', 'createdBy'], 'integer'],
            [['createdAt'], 'safe'],
            [['firstName', 'lastName', 'profilePic', 'phoneNumber', 'email', 'website', 'twitter', 'fb', 'googlePlus'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
           // [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countryId' => 'countryId']],
           // [['currencyId'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currencyId' => 'currencyId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'profileId' => 'Profile ID',
            'userId' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'profilePic' => 'Profile Pic',
            'countryId' => 'Country ID',
            'phoneNumber' => 'Phone Number',
            'currencyId' => 'Currency ID',
            'email' => 'Email',
            'website' => 'Website',
            'twitter' => 'Twitter',
            'fb' => 'Fb',
            'googlePlus' => 'Google Plus',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Profileimages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfileimages()
    {
        return $this->hasMany(Profileimage::className(), ['profileId' => 'profileId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'countryId']);
    }

    /**
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currencyId' => 'currencyId']);
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
}
