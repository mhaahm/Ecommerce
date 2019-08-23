<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imports extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'imports';

    protected  $fillable = [
        'import_title',
        'description'
    ];
}
