<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use App\Model\Position;

class Admin extends BaseModel implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $table = 'admin';
   
    use Authenticatable;
    
    public function position(){
        return $this -> belongsTo(Position::class, 'position_id', 'id');
    }
}
