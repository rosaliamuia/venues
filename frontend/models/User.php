<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 *
 * @property Booking[] $bookings
 * @property Booking[] $bookings0
 * @property Bookmarks[] $bookmarks
 * @property Invoice[] $invoices
 * @property Invoice[] $invoices0
 * @property Invoiceitems[] $invoiceitems
 * @property Listings[] $listings
 * @property Listingusers[] $listingusers
 * @property Messages[] $messages
 * @property Messages[] $messages0
 * @property Notifications[] $notifications
 * @property Payments[] $payments
 * @property Payments[] $payments0
 * @property Profiles[] $profiles
 * @property Profiles[] $profiles0
 * @property Reviews[] $reviews
 * @property Wallet[] $wallets
 * @property Wallet[] $wallets0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Bookings0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings0()
    {
        return $this->hasMany(Booking::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Bookmarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarks()
    {
        return $this->hasMany(Bookmarks::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Invoices0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices0()
    {
        return $this->hasMany(Invoice::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Invoiceitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceitems()
    {
        return $this->hasMany(Invoiceitems::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listings::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Listingusers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingusers()
    {
        return $this->hasMany(Listingusers::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Messages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['receiverId' => 'id']);
    }

    /**
     * Gets query for [[Messages0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessages0()
    {
        return $this->hasMany(Messages::className(), ['senderId' => 'id']);
    }

    /**
     * Gets query for [[Notifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notifications::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['paidBy' => 'id']);
    }

    /**
     * Gets query for [[Payments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments0()
    {
        return $this->hasMany(Payments::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Profiles0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles0()
    {
        return $this->hasMany(Profiles::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Wallets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWallets()
    {
        return $this->hasMany(Wallet::className(), ['userId' => 'id']);
    }

    /**
     * Gets query for [[Wallets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWallets0()
    {
        return $this->hasMany(Wallet::className(), ['createdBy' => 'id']);
    }
}
