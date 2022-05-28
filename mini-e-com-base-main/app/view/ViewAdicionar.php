<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewAdicionar extends ViewPadrao
{
    static function formulario(){
        $sHtml ='
        <form class="form-group" method="POST" action="index.php?pg=produtos&act=insert" enctype="multipart/form-data">
            <h1>Adicionar Produto</h1>
            <input type="text" class="form-control" name="equipe" placeholder="equipe/time" required> <br><br>

            <input type="text" class="form-control" name="preço" placeholder="preço do produto" required> <br><br>

            <input type="text" class="form-control" name="tamanho" placeholder="tamanho" required> <br><br>

            <input type="text" class="form-control" name="genero" placeholder="gênero" required> <br><br>

            <input type="file" class="form-control" name="imagem" placeholder="imagem" required> <br><br>

            <input type="text" class="form-control" name="descrição" placeholder="Descrições"> <br><br>

            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
        </form>
        ';
        return $sHtml;
    }
}
