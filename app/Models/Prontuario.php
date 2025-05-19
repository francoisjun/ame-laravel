<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Prontuario extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'diagnostico',
        'queixa',
        'obs',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function getData()
    {
        return Carbon::parse($this->updated_at)->format('d/m/Y H:m');
    }
}
