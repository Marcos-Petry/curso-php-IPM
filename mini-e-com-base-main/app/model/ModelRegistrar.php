<?php

namespace App\Model;

use App\Db\Connection;

class ModelRegistrar extends ModelPadrao
{
    public $id;

    function getTable()
    {
        return 'login';
    }

    
    function insertProduto()
    {
        $usuário = $this->usuário;
        $senha = $this->senha;
        $tipousuário = $this->tipousuário;

        return parent::insert([
            'usuário' => $this->getBdValue($usuário),
            'senha' => $this->getBdValue($senha),
            'tipousuário' => $this->getBdValue($tipousuário)
        ]); 
    }
}