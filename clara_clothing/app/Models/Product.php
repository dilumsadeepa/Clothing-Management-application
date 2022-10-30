<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'catagory','image1','image2','image3','price','size','code','des','status',
    ];

    public function scopeFilter($query, array $filters){
        // if($filters['tag'] ??  false){
        //     $query->where('tags', 'like', '%' . request('tag') .'%');
        // }
        if($filters['psearch'] ??  false){
            $query->where('name', 'like', '%' . request('psearch') .'%');
                    // ->orWhere('des', 'like', '%' . request('psearch') .'%');
                    // ->orWhere('tags', 'like', '%' . request('search') .'%');
        }
    }
}
