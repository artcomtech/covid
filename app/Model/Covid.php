<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    public $timestamps = true;

    protected $table = 'covid';
    protected  $primaryKey = 'id';

    protected $fillable = ['jml_otg', 'pantau', 'selesai_pantau', 'rawat_rs', 'rawat_rumah', 'rawat_sembuh', 'rawat', 'sembuh','meninggal','jml_perjalanan', 'jml_selesai','jml_pantau','created_at', 'updated_at'];
}
