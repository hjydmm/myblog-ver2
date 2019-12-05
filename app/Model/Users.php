<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;

class Users extends BaseModel implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $table = 'users';

    use Authenticatable;

    public function articles()
    {
        return $this->hasMany(Article::class, 'user_id', 'id');
    }

    public function article_relate()
    {
        return $this->hasManyThrough(ArticleRelate::class, Article::class, 'user_id', 'aid', 'id');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'user_id', 'id');
    }

    public function store()
    {
        return $this->hasMany(Store::class, 'user_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class,'user_id', 'id');
    }

    public function attend()
    {
        return $this->hasMany(Attend::class, 'user_id', 'id');
    }
}
