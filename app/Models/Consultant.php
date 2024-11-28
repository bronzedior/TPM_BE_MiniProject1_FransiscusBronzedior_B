<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = [
        'name', 'position', 'industry', 'expertise', 'hourlyRate', 'availability', 'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
