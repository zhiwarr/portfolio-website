<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['image_path'];
        public function getImagePathAttribute(){
            return env('APP_URL')."uploads/courses/".$this->image;
        }
}