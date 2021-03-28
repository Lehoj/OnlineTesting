<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Test extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function path()
    {
        return url('/tests/' . $this->id);
    }

    public function publicPath()
    {
        return url('/testing/' . $this->id.'-'. Str::slug($this->title));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function studenttests()
    {
        return $this->hasMany(StudentTest::class);
    }

}
