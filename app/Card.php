<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
        return $this->HasMany(Note::class);
    }

    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
