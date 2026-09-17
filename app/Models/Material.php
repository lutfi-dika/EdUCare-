<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'description',
        'content',
        'difficulty',
        'thumbnail',
        'video_url',
        'icon',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progressRecords()
    {
        return $this->hasMany(Progress::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getProgressAttribute()
    {
        $userId = session('user.id');
        if (!$userId) return 0;

        $progress = $this->progressRecords()->where('user_id', $userId)->first();
        return $progress ? $progress->percentage : 0;
    }
}
