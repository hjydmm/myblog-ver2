<?php

namespace App\Model;

class Article extends BaseModel
{
    protected $table = 'articles';

    public function article_relate()
    {
        return $this->hasOne(ArticleRelate::class, 'aid', 'id');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'aid', 'id');
    }

    public function store()
    {
        return $this->hasMany(Store::class, 'aid', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'aid', 'id');
    }

    public function tags()
    {
        return $this->hasOne(Tags::class, 'aid', 'id');
    }

    public function categories()
    {
        return $this->hasOne(Categories::class, 'aid', 'id');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}
