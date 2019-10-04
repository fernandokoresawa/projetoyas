<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    //

    // Relacionamento entre histórico e sensor
    public function sensor() {
        $this->hasMany(Sensor::class, 'sensor_id');
    }
}
