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

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'national_code'
    ];

//    protected $casts=['created_at'=>DateCastToJalali::class,'updated_at'=>DateCastToJalali::class];
}
