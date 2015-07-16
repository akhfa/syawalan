<?php

namespace app\models;

use Yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;

/**
 * This is the model class for table "kehadiran".
 *
 * @property integer $no
 * @property string $nama
 * @property string $alamat
 * @property string $hp
 * @property string $bbm
 * @property string $line
 * @property string $whatsapp
 * @property string $angkatan
 * @property string $created
 */
class Kehadiran extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kehadiran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'hp', 'angkatan'], 'required'],
            [['alamat'], 'string'],
            [['created'], 'safe'],
            [['nama'], 'string', 'max' => 200],
            [['hp', 'line'], 'string', 'max' => 20],
            [['bbm'], 'string', 'max' => 11],
            [['whatsapp'], 'string', 'max' => 15],
            [['angkatan'], 'string', 'max' => 4],
            [['reCaptcha'], ReCaptchaValidator::className()]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'nama' => 'Nama',
            'alamat' => 'Alamat Lengkap',
            'hp' => 'Nomor HP',
            'bbm' => 'Pin BBM',
            'line' => 'ID Line',
            'whatsapp' => 'No Whatsapp',
            'angkatan' => 'Angkatan Pensiun Dewan',
            'created' => 'Created',
        ];
    }
}
