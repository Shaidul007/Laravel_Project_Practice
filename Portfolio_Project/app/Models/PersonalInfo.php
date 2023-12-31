<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'hero_img','birthday','phone','email','address','language','freelance'];
}
