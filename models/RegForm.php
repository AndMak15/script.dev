<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 10.01.2016
 * Time: 23:06
 */

namespace app\models;

use Yii;
use yii\base\Model;
class RegForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $status;
    public function rules()
    {
        return [
            [['username', 'email', 'password'],'filter', 'filter' => 'trim'],
            [['username', 'email', 'password'],'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['password', 'string', 'min' => 6, 'max' => 255],
            ['username', 'unique',
                'targetClass' => User::className(),
                'message' => 'Логін вже занято.'],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass' => User::className(),
                'message' => 'Эта почта уже занята.'],
            ['status', 'default', 'value' => User::STATUS_ACTIVE, 'on' => 'default'],
            ['status', 'in', 'range' =>[
                User::STATUS_NOT_ACTIVE,
                User::STATUS_ACTIVE
            ]],
            ['status', 'default', 'value' => User::STATUS_NOT_ACTIVE, 'on' => 'emailActivation'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'username' => 'Логін',
            'email' => 'Эл. почта',
            'password' => 'Пароль'
        ];
    }
    public function reg()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = $this->status;
        $user->created_at = 0;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}