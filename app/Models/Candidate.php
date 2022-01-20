<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'candidates';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'education', 'work', 'experience'
    ];
}
