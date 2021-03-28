<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTestResults extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function studenttest()
    {
        return $this->belongsTo(StudentTest::class);
    }
}
