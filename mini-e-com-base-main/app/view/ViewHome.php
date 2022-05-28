<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewHome extends ViewPadrao
{
    static function getHTMLTabelaCompras(array $a){
        $sHtml ='';
                foreach($a as $x)
        {
          $sHtml .= '
          
          <div class="card" style="width: 18rem;">
          <img style="width: 250px; height: 220px" src="'. $x['imagem'] .'">
  <div class="card-body">
    <h5 class="card-title">'.$x['equipe'].'</h5>
    <p class="card-text">Genero '.$x['genero'].',Tamanho '.$x['tamanho'].' Por apenas R$ '.$x['preço'].'. Garanta ja a sua!!! <br>'.$x['descrição'].'</p>
    <a href="index.php?pg=home" class="btn btn-primary">Adicionar ao Carrinho</a>
  </div>
</div>
          ';
        }    
        
        return $sHtml;

    }
}


