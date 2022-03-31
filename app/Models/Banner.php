<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
      'image' , 'title_en', 'title_bn', 'title_arb', 'subtitle_en', 'subtitle_bn', 'subtitle_arb',
      'button_en', 'button_bn', 'button_arb', 'url', 'create_by',
    ];
}
