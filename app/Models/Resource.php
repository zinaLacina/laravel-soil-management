<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Resource
 * @package App\Models
 * @version January 26, 2019, 4:17 am UTC
 */
class Resource extends Model
{
    use SoftDeletes;

    public $table = 'resource';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'resourceName',
        'resourceDescription',
        'resourceImage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'resourceName' => 'string',
        'resourceDescription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'resourceName' => 'required'
    ];

    
}
