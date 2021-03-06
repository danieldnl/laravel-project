<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];

    public function card()
    {
        return $this->BelongsTo(Card::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
