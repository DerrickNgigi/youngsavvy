<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sharpNeuronParticipant extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'school',
        'grade',
        'parent_email',
        'parent_number',
        'home_area'
    ];
}
