<?php declare(strict_types=1);

namespace App;

use Enlight\StashView\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use Cacheable;

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
