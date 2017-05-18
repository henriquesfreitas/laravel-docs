<?php

namespace App\Repositories;

use App\Post;
use Carbon\Carbon;

class PostRepository {
    public function all(){
        return Post::all();
    }

    public function scopeFilter($query, $filters){
        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
        return $query;
    }
}