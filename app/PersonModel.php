<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    protected $table = "person";

    protected $primaryKey = "id";
    public $timestamps = false;
}
