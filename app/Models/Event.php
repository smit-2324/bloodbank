<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'hospital_id',
        'type',
        'name',
        'image',
        'description',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospitals::class, 'hospital_id', 'id',);
    }
}
