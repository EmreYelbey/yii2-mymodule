<?php

namespace emreyelbey\content\models;

use Yii;

/**
 * This is the model class for table "stocklists".
 *
 * @property int $id
 * @property string $sellername
 * @property string $productsname
 *
 * @property Products $productsname0
 * @property Sellers $sellername0
 */
class Stocklists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stocklists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sellername', 'productsname'], 'required'],
            [['sellername', 'productsname'], 'string', 'max' => 100],
            [['productsname'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['productsname' => 'name']],
            [['sellername'], 'exist', 'skipOnError' => true, 'targetClass' => Sellers::className(), 'targetAttribute' => ['sellername' => 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sellername' => 'Sellername',
            'productsname' => 'Productsname',
        ];
    }

    /**
     * Gets query for [[Productsname0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsname0()
    {
        return $this->hasOne(Products::className(), ['name' => 'productsname']);
    }

    /**
     * Gets query for [[Sellername0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSellername0()
    {
        return $this->hasOne(Sellers::className(), ['name' => 'sellername']);
    }
}
