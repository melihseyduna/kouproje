<?php

namespace kouosl\internetprog\models;

use Yii;

/**
 * This is the model class for table "internetprog".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $date
 */
class Internetprog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'internetprog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'content', 'date'], 'required'],
            [['id'], 'integer'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }
}
