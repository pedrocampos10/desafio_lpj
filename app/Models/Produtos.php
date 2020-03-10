<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Produtos
 * @package App\Models
 * @version March 10, 2020, 2:36 pm UTC
 *
 * @property string nome
 * @property number valor
 * @property string descricao
 */
class Produtos extends Model
{

    public $table = 'produtos';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'valor',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'valor' => 'float',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
