<?php

namespace App\Model;

class Tags extends BaseModel
{
    protected $table = 'tags';

    public function articles()
    {
        return $this->belongsTo(Article::class, 'aid', 'id');
    }
}
