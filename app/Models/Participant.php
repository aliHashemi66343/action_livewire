<?php

namespace App\Models;

use App\Casts\DateCastToJalali;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Participant extends Model
{

    use HasFactory;
//    use InteractsWithMedia;
    public $timestamps=false;
    protected $fillable=['first_name','last_name','mobile','national_code'];
//    protected $casts=['created_at'=>DateCastToJalali::class,'updated_at'=>DateCastToJalali::class];
}
