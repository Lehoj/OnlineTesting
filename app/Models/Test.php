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

    // Vztah Test-User, Test patri urcitemu Userovi.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Vztah Test-Question, jeden Test moze mat viacero Otazok.
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function studenttests()
    {
        return $this->hasMany(StudentTest::class);
    }

}
