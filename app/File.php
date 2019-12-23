<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'upload_files';
    protected $fillable = ['title', 'image'];
}
