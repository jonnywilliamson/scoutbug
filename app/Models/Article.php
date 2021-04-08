<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;

    protected $guarded = [];

    public function toSearchableArray(): array
    {
        return $this->only(['description']);
    }

    public function scopeGroupTwo(Builder $query)
    {
        $query->where('group_id', 2);
    }

}