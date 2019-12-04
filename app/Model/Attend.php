<?php

namespace App\Model;

class Attend extends BaseModel
{
    protected $table = 'attend';

    public function users()
    {
        return $this->belongsTo(Users::class, 'attend_user_id', 'id');
    }
}
