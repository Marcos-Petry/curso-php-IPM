<?php

namespace App\Model;

use App\Db\Connection;

class ModelProduto extends ModelPadrao
{
    public $id;

    function getTable()
    {
        return 'produtos';
    }

    

    function deleteProduto()
    {
        $id = $this->id;

        return parent::delete([
            'codigo' => $id
        ]);
        
    }
    function insertProduto(){
        $equipe = $this->equipe;
        $preço = $this->preço;
        $tamanho = $this->tamanho;
        $genero = $this->genero;
        $imagem = $this->imagemD;
        $descrição = $this->descrição;
        

        return parent::insert([
            'equipe' => $this->getBdValue ($equipe),
            'preço' => $this->getBdValue($preço),
            'tamanho' =>$this->getBdValue ($tamanho),
            'genero' =>$this->getBdValue ($genero),
            'imagem' =>$this->getBdValue ($imagem),
            'descrição' => $this->getBdValue ($descrição)
        ]);
    }
}
