<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class InputData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'input_data';
    
    // Jika pakai timestamps ISODate MongoDB
    public $timestamps = false;

    protected $fillable = [
        'step',
        'kategori',
        'nama_sales',
        'telda',
        'sto',
        'kegiatan',
        'poi_name',
        'address',
        'ekosistem',
        'contact_name',
        'contact_position',
        'contact_phone',
        'provider',
        'provider_detail',
        'cost',
        'feedback',
        'feedback_detail',
        'detail_info',
        'hasil_fu',
        'photo_url',
        'user_id',
        'visit_ke',
        'timestamp',
    ];
}
