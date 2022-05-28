<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewEditarProduto extends ViewPadrao
{
    static function getHTML(array $a){
        $sHtml ='
            <form class="form-group">
                <input type="text" class="form-control"';
                

                foreach ($a as $x ){
                    $sHtml .= 'value ='. $x['nome']. '
                }

                
            </form>
        ';
        
        return $sHtml;

    }
}
}