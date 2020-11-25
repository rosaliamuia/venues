<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profileimage".
 *
 * @property int $profileimageId
 * @property int $profileId
 * @property string $profilePic
 *
 * @property Profiles $profile
 */
class Profileimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profileimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profileId', 'profilePic'], 'required'],
            [['profileId'], 'integer'],
            [['profilePic'], 'string', 'max' => 255],
            [['profileId'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profileId' => 'profileId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'profileimageId' => 'Profileimage ID',
            'profileId' => 'Profile ID',
            'profilePic' => 'Profile Pic',
        ];
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profiles::className(), ['profileId' => 'profileId']);
    }
}
