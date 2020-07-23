<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProkumDaerah extends Model
{
    protected $table = 'prokum_daerah';

    protected $fillable = [
        'bentuk', 'singaktan_jenis', 'no_per', 'tahun', 'tgl_perundangan', 'judul', 'katalog', 'abstrak', 'file', 'lampiran', 'status', 'status_2'
    ];
}
