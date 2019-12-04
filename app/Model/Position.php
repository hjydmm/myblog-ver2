<?php

namespace App\Model;

class Position extends BaseModel
{
    protected $table = 'position';

    public function admin(){
        return $this->hasMany(Admin::class, 'position_id', 'id');
    }
}
