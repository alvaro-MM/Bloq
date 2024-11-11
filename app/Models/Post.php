<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{


    use HasFactory;
    protected $fillable = ['title', 'body','user_id','published_at'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category() : belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
