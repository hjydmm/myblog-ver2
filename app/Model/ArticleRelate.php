<?php

namespace App\Model;

class ArticleRelate extends BaseModel
{
    protected $table = 'article_relate';

    public function articles()
    {
        return $this->belongsTo(Article::class, 'aid', 'id');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}
