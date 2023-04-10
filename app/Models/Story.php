<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $table = 'story';
    protected $primarykey = 'id';
    protected $fillable = [
        "type",
        "url",
        "headline",  
        "sub_headline",  
        "overview",  
        "publish_at",  
        "thumbnail",
    ];
}
