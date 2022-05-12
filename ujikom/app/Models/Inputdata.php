<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\InputdataFactory;
use Illuminate\Database\Eloquent\Model;

class Inputdata extends Model
{
    use HasFactory;

    protected $table='inputdatas';
    protected $fillable=[
        'id_user',
        'tanggal',
        'jam',
        'lokasi',
        'suhu'
    ];

    public function UserModels() {
        return $this->belongsTo(User::class);
    }
}
