<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Egreso
 *
 * @property $id
 * @property $detalles
 * @property $monto
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Egreso extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalles','monto'];



}
