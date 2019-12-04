<?php

namespace App\Model;

class Comment extends BaseModel
{
    protected $table = 'comments';

    public function articles()
    {
        return $this->belongsTo(Article::class, 'aid', 'id');
    }
}
