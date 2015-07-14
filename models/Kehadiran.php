<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kehadiran".
 *
 * @property integer $no
 * @property string $nama
 * @property string $alamat
 * @property string $hp
 * @property string $angkatan
 * @property string $created
 */
class Kehadiran extends \yii\db\ActiveRecord
{
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
            [['nama', 'alamat', 'hp', 'angkatan'], 'required'],
            [['alamat'], 'string'],
            [['created'], 'safe'],
            [['nama'], 'string', 'max' => 200],
            [['hp'], 'string', 'max' => 20],
            [['angkatan'], 'string', 'max' => 4]
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
            'angkatan' => 'Angkatan Pensiun Dewan',
            'created' => 'Created',
        ];
    }
}
