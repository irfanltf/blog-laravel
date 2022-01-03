<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable yang boleh diisi
    // protected $fillable = ['judul', 'readmore', 'body'];

    // Guarded yang ga boleh diisi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeCari($query, array $filters)
    {
        // if (isset($filters['cari']) ? $filters['cari'] : false) {
        //     return $query->where('judul', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('readmore', 'like', '%' . $filters['cari'] . '%');
        // }

        $query->when($filters['cari'] ??  false, function ($query, $cari) {
            return $query->where('judul', 'like', '%' . $cari . '%')
                ->orWhere('body', 'like', '%' . $cari . '%')
                ->orWhere('readmore', 'like', '%' . $cari . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
