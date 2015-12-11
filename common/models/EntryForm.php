<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
* EntryForm
*/
class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    
}