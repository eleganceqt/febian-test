<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'vacancies';

    /**
     * @var array
     */
    protected $fillable = [
        'company', 'title', 'location'
    ];
}
