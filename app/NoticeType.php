<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeType extends Model
{
    protected $fillable = ['name','description'];

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }
}
