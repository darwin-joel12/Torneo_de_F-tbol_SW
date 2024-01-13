<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;
    protected $guarded = [];
=======
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



>>>>>>> fbcf5b4809c95541bae4acdb76800a954a248a63
}
