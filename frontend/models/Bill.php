<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bill".
 *
 * @property string $bill_no
 * @property integer $year
 */
class Bill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year'], 'integer'],
            [['bill_no'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bill_no' => 'ใบเสร็จรับเงินเล่มที่',
            'year' => 'ปีงบประมาณ',
        ];
    }
}
