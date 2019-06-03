<?php namespace MaciejFrankowski\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'maciejfrankowski_vuerentacar_veicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
