<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_name',
        'language_code'
    ];

    public function spanishData()
    {
        $this->hasMany(SpanishData::class);
    }

    public function catalanData()
    {
        $this->hasMany(CatalanData::class);
    }

    public static function getId($code) 
    {
        $language = DB::table('languages')->where('language_code', '=', $code)->first();
        return $language->id;

    }
}
