<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProduto extends ViewPadrao
{
    static function getHTMLTabelaProdutos(array $a){
        $sHtml ='
        <table class="table">
            <thead class="thead-dark">
              <tr>
              <th scope="col">codigo</th>
              <th scope="col">equipe</th>
              <th scope="col">preço</th>
              <th scope="col">tamanho</th>
              <th scope="col">genero</th>
              <th scope="col"> Imagem</th>
              <th scope="col">descrição</th>
              </tr>
            </thead>

            <tbody>
        ';

        foreach($a as $x)
        {
          $sHtml .= '
          <tr>
          <td>'. $x['codigo']. '</td>
          <td>'. $x['equipe']. '</td>
          <td>'. $x['preço']. '</td>
          <td>'. $x['tamanho']. '</td>
          <td>'. $x['genero']. '</td>
          <td>'. $x['imagem']. '</td>
          <td>'. $x['descrição']. '</td>
            <td><a href="index.php?pg=produtos&act=delete&proid=' . $x['codigo'] . ' " ><i class="fa-solid fa-trash"></i></a></td>
            
          </tr>
          ';
        }    
        
        return $sHtml;

    }
}
