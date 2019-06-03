<?php

use MaciejFrankowski\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function() {
    return Vehicle::all();
});