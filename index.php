<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.js" rel="stylesheet">

    <script src="bootstrap/js/jquery-ui-1.11.3/external/jquery/jquery.js"></script>
    <script src="bootstrap/js/jquery-ui-1.11.3/jquery-ui.js"></script>
    <link href="bootstrap/js/jquery-ui-1.11.3/jquery-ui.css" rel="stylesheet">
</head>
<?php

require_once("lista_clientes.php");


print'<div id="container" class="container">';


IF($_REQUEST[ordem]=='down')
    { krsort($clientes); $ordem='up'; }
ELSE
    $ordem = "down";

print "<table align='center' class='table table-bordered table-ordered table-hover'>
        <caption>LISTA DE CLIENTES</caption>
        <thead>
          <tr>
            <th>
            </th>
            <th><a data='$ordem' class='icon-arrow-$ordem' href='./?ordem=$ordem' title='$ordem'></a>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
           </tr>
        </thead>
        <tbody>
      ";

FOREACH($clientes as $id=>$cli)
    print "<tr>
             <!--td><button id='dialog-link-cliente' href='".$cli->get('codigo')."'><i id='' class='icon-user' href='$id'></i></button></td-->
             <td><a id='dialog-link-cliente' href='./lista_clientes.php?id=".$cli->get('codigo')."'><i id='' class='icon-user' href='$id'></i></a></td>
             <td align='center'>".$cli->get('codigo')."</td>
             <td>".$cli->get('nome')."</td>
             <td>".$cli->get('email')."</td>
            </tr>
          ";
print "</tbody></table>";
print "</div>";
?>