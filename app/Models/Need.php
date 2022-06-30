<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function scopeFilter($query) {
        if (request('search-blood') == NULL) {
            $query->where('city', 'like', '%' . request('search-location') . '%');
        } else {
            $query->where('city', 'like', '%' . request('search-location') . '%')
                  ->where('blood', request('search-blood'));
        }
    }
}
