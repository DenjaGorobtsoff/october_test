<?php namespace Gorob4ik\Birds\Models;

use Model;

/**
 * Model
 */
class Birds extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gorob4ik_birds_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
