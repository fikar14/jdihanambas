<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prokum extends Model
{
    protected $fillable = [
        'jenis', 'nomor', 'judul', 'tahun', 'fileupload'
    ];
}
