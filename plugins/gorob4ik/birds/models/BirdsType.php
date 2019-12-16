<?php namespace Gorob4ik\Birds\Models;

use Model;

/**
 * Model
 */
class BirdsType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gorob4ik_birds_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'birds' => [
            'Gorob4ik\Birds\Models\Birds',
            'table' => 'gorob4ik_birds_birds_types',
            'order' => 'name'
        ]

    ];
}
