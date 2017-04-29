<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    protected $table = 'sitemap';
    protected $primaryKey = 'id_sitemap';
    protected $fillable = ['url', 'priority'];
    public $timestamps = true;
}
