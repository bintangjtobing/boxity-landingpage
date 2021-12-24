<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'posisi',
        'sumber_informasi',
        'nama_lengkap',
        'picture',
        'noktp',
        'nonpwp',
        'nobpjs',
        'anak_ke',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi',
        'domisili',
        'kecamatan',
        'kelurahan',
        'jenis_kelamin',
        'agama',
        'suku',
        'alamat_domisili',
        'email',
        'nohp',
        'status_perkawinan',
        'pendidikan_akhir',
        'about',
        'supported_file',
        'expected_sallary'
    ];
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
