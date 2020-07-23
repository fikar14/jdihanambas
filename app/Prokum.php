<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prokum extends Model
{
    protected $fillable = [
        'desa', 'nomor', 'judul', 'tahun', 'fileupload'
    ];
}
