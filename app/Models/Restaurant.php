<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public $table = "restaurant"; //when database name is not plural
    public $timestamps = false;
    protected $primaryKey = 'Id';  //BECAUSE name of column should be in small latter if it is not small then define like this in model
}
