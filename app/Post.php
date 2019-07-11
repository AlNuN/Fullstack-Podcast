<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;  // Allow to use Elloquent for querying

class Post extends Model
{
    // 
    use Searchable;

    public function shouldBeSearchable() {
        return $this->where('isPublished', true);
    }

}
