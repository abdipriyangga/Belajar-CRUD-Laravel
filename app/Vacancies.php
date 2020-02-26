<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancies extends Model
{
    use SoftDeletes;
    protected $fillable = ['lokasi', 'type', 'durasi', 'rentangGaji', 'requirementSkill'];
}
