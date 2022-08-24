<?php

if(isset($_POST{'btnCadastrar'})){
        var_dump($_POST);
        }

?>

<fieldset>
    <form method="POST">
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" name=txtEmail class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" name=txtPassword class="form-control"  placeholder="Password">
        </div>
        <div class="form-group">
            <label" for="InputNome">Nome</label>
            <input type="nome" name="txtNome" class="form-control" id="exampleinputname" placeholder="enter nome">
        </div>
        <button type="submit" name="btnCadastrar" class="btn btn-primary">Enviar</button>
    </form>
</fieldset>
