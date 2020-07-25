<?php declare(strict_types=1);

namespace App;

use Enlight\StashView\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Cacheable;

    protected $touches = ['card'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
