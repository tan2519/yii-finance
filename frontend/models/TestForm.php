<?php
namespace frontend\models;
use yii\base\Model;
class TestForm extends Model{
public $fname;
public $lname;
public $age;
public function rules() {
return[
[['fname','lname','age'],'required'],
[['lname'],'email'],
    [['age'],'number']
];
}
public function attributeLabels() {
return[
'fname'=>'ชือ',
'lname'=>'อีเมล์',
    'age'=>'อายุ'
];
}
}
