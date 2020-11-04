<?php

namespace Mobin\VisitPackage;

use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visit';
    protected $fillable = ['ip','browser','path'];

    public static function make(){
         Visit::create([
            'ip' => Request::getClientIp(true),
            'browser' => Request::header('User-Agent'),
            'path' => (Request::path() == '/') ? 'Home' : Request::path(),
        ]);
    }
}
