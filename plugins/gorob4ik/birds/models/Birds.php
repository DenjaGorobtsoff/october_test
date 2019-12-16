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

    /**
     * Relation
     */

    public $belongsToMany = [
        'types' => [
            'Gorob4ik\Birds\Models\BirdsType',
            'table' => 'gorob4ik_birds_birds_types',
            'order' => 'bird_type'
        ]

    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $attachMany = [
        'images_gallery' => 'System\Models\File'
    ];
}
