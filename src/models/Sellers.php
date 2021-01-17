<?php

namespace emreyelbey\content\models;

use Yii;

/**
 * This is the model class for table "sellers".
 *
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string $phonenumber
 * @property string $authorname
 *
 * @property Stocklists[] $stocklists
 */
class Sellers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sellers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'address', 'phonenumber', 'authorname'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['email', 'address', 'phonenumber', 'authorname'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'address' => 'Address',
            'phonenumber' => 'Phonenumber',
            'authorname' => 'Authorname',
        ];
    }

    /**
     * Gets query for [[Stocklists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStocklists()
    {
        return $this->hasMany(Stocklists::className(), ['sellername' => 'name']);
    }
}
