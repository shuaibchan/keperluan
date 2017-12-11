<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_keperluan_subsidi".
 *
 * @property integer $id_keperluan
 * @property string $tahun_keperluan
 * @property integer $id_sub_wilayah
 * @property string $fasa_tanaman
 * @property string $bil_peladang
 * @property string $keluasan_daftar
 * @property string $keluasan_crf
 * @property string $npk
 * @property string $urea
 * @property string $grow_enhancer
 * @property string $baja_foliar
 * @property string $npk2
 * @property string $bajak
 * @property string $racun
 * @property string $kapasiti_stor
 */
class KeperluanSubsidi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_keperluan_subsidi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun_keperluan', 'id_sub_wilayah', 'fasa_tanaman', 'bil_peladang', 'keluasan_daftar', 'keluasan_crf', 'npk', 'urea', 'grow_enhancer', 'baja_foliar', 'npk2', 'bajak', 'racun', 'kapasiti_stor'], 'required'],
            [['id_sub_wilayah'], 'integer'],
            [['tahun_keperluan', 'fasa_tanaman', 'bil_peladang', 'keluasan_daftar', 'keluasan_crf', 'npk', 'urea', 'grow_enhancer', 'baja_foliar', 'npk2', 'bajak', 'racun', 'kapasiti_stor'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_keperluan' => 'Id Keperluan',
            'tahun_keperluan' => 'Tahun Keperluan',
            'id_sub_wilayah' => 'PPK',
            'fasa_tanaman' => 'Fasa Tanaman',
            'bil_peladang' => 'Bil Peladang',
            'keluasan_daftar' => 'Keluasan Daftar',
            'keluasan_crf' => 'Keluasan Crf',
            'npk' => 'Npk',
            'urea' => 'Urea',
            'grow_enhancer' => 'Grow Enhancer',
            'baja_foliar' => 'Baja Foliar',
            'npk2' => 'Npk2',
            'bajak' => 'Bajak',
            'racun' => 'Racun',
            'kapasiti_stor' => 'Kapasiti Stor',
        ];
    }
}
