<?php

namespace App\Repositories;

use App\Models\Produtos;
use App\Repositories\BaseRepository;

/**
 * Class ProdutosRepository
 * @package App\Repositories
 * @version March 10, 2020, 2:36 pm UTC
*/

class ProdutosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'valor',
        'descricao'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produtos::class;
    }
}
