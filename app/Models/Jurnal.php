<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Jurnal extends Model
{
    use HasFactory;
   // use  Sluggble;

    protected $guarded= ['id'];

    // public function scopeFilter($query, array $filters){

    // }
    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('nama_jurnal', 'like', '%'. $filters['search'] .'%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama_jurnal', 'like', '%'. $search .'%');
            //author tahun jenis jurnal
        });

        $query->when($filters['author'] ?? false, fn($query, $author)=> 
             $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggble():array
    {
        return [
            'slug' => [
                'source' => 'nama_jurnal'
            ]
            ];
    }
}
