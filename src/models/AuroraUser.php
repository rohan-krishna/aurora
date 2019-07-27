<?php

namespace bluehexagon\aurora\Models;
use Illuminate\Database\Eloquent\Model;

class AuroraUser extends Model {
    
    protected $guarded = ['id'];

    protected $table = 'aurora_users';
}