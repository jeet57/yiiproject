<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $name
 * @property string $designation
 * @property integer $contact
 * @property string $email
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'designation', 'contact', 'email'], 'required'],
            [['contact'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['designation'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'designation' => 'Designation',
            'contact' => 'Contact',
            'email' => 'Email',
        ];
    }
}
