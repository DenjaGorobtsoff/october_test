<?php namespace Gorob4ik\Birds\Components;

use Lang;
use Cms\Classes\ComponentBase;
use RainLab\Builder\Classes\ComponentHelper;
use SystemException;
use Gorob4ik\Birds\Models\Birds;

class SomeBird extends ComponentBase
{
    public $birdList;

    public function componentDetails()
    {
        return [
            'name'        => 'Some birds',
            'description' => 'Show Some birds'
        ];
    }

    public function defineProperties()
    {
        return[
          'result' => [
            'title' => 'Name of birds',
            'description' =>  'How many birds display?',
            'default' => 0,
              'validationPattern' => '^[0-9]+$',
              'validationMessage' => 'Only Numbers'

          ]
        ];
    }

    public function onRun() {
       $this->birdList = $this->getBirdList();
    }

    public function getBirdList() {
        $birdList = Birds::all();

        return $birdList;
    }
}