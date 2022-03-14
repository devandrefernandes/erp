<?php

namespace App\Modules\Client\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $hidden = [
      'id',
      'created_at',
      'updated_at',
      'deleted_at',
    ];

    protected $fillable = [
        'name'
    ];
}
