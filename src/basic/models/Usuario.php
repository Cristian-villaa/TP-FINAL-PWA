<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $ursename
 * @property string $nombre
 * @property string $apellido
 * @property string $password
 * @property string $accessToken
 * @property string $authKey
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ursename', 'nombre', 'apellido', 'password', 'accessToken', 'authKey'], 'required'],
            [['ursename'], 'string', 'max' => 50],
            [['nombre', 'apellido'], 'string', 'max' => 100],
            [['password', 'accessToken', 'authKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ursename' => 'Ursename',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'password' => 'Password',
            'accessToken' => 'Access Token',
            'authKey' => 'Auth Key',
        ];
    }
}
