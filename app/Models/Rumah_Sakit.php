<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah_Sakit extends Model
{
    use HasFactory;
    protected $table = "rumahsakits";
    protected $primaryKey = "id_rumahsakit";
    protected $fillable = [
        'nama_rumahsakit', 'alamat_rumahsakit', 'foto_rumahsakit', 'latitude_rumahsakit', 'longitude_rumahsakit'
    ];

    protected $casts = ['latitude_rumahsakit' => 'float', 'longitude_rumahsakit' => 'float'];

    public function layanans()
    {
        return $this->belongsToMany(Layanan::class, 'layanan_rumahsakit', 'rumahsakit_id', 'layanan_id')->withPivot('id', 'layanan_id', 'rumahsakit_id', 'informasi_layanan');;
    }
}
