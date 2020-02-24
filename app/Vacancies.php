<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    protected $fillable = ['lokasi', 'type', 'durasi', 'rentangGaji', 'requirementSkill'];
}
