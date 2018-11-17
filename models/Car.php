<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property int $cost Цена
 * @property string $name Наименование
 * @property int $categoryId Категория
 * @property string $createdAt Дата создания
 * @property string $updatedAt Дата изменения
 *
 * @property Categories $category
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'categoryId', 'createdAt', 'updatedAt'], 'required'],
            [['id', 'cost', 'categoryId'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categoryId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cost' => 'Цена',
            'name' => 'Наименование',
            'categoryId' => 'Категория',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'categoryId']);
    }
}