<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmDataAnggota extends Model
{
    protected $table = 'tm_data_anggota';

    protected $fillable = ['name','email','nim','no_telepon','jenis_kelamin','tanggal_lahir','ukuran_baju','alamat','image_url','status','created_at','updated_at'];

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $dates = [
        'updated_at',
        'created_at'
    ];
}
