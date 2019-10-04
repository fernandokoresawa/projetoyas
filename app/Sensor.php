<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //

    // Relacionamento entre histórico e sensor
    public function historico() {
        $this->belongsTo(Historico::class, 'sensor_id');
    }
}
