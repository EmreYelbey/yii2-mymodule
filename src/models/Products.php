<?php

namespace emreyelbey\content\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $name
 *
 * @property Stocklists[] $stocklists
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * Gets query for [[Stocklists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStocklists()
    {
        return $this->hasMany(Stocklists::className(), ['productsname' => 'name']);
    }
}
