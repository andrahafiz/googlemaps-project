<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = "layanans";
    protected $primaryKey = "id_layanan";
    protected $fillable = [
        'nama_layanan'
    ];

    public function rumahsakits()
    {
        return $this->belongsToMany(Rumah_Sakit::class, 'layanan_rumahsakit', 'layanan_id', 'rumahsakit_id');
    }
}
