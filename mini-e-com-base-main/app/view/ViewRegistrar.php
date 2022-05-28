<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewRegistrar extends ViewPadrao
{
    static function formregistrar(){
            $sHtml = '
                <form class="form-group" method="POST" action="index.php?pg=registrar">
                    <input type="text" class="form-control" name="usuário" placeholder="Usuario" required ><br><br>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required><br><br>
                    <input type="password" class="form-control" name="tipousuário" placeholder="admin ou user" required>
                    <input type="submit" class="btn-primary btn" value="Confirmar">
                    <p class="form control">Você já possui uma conta ? <a href="index.php?pg=login">Logar Aqui.</a>
                <form>
            ';

            return $sHtml;
    }
}
