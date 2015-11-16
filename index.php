<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <script src="bootstrap/js/jquery-ui-1.11.3/external/jquery/jquery.js"></script>
    <script src="bootstrap/js/jquery-ui-1.11.3/jquery-ui.js"></script>
    <link href="bootstrap/js/jquery-ui-1.11.3/jquery-ui.css" rel="stylesheet">
</head>
<?php

require_once("lista_clientes.php");


print'<div id="container" class="container">';

//print_r($_REQUEST);
SWITCH ($_REQUEST[ordem])
{
    //CASE '':
    //CASE 'up': {ksort($clientes); $ordem='down'; BREAK;}
    //CASE 'down': {krsort($clientes);$ordem='up'; BREAK;}
    CASE '':
    CASE 'up':   {$clientes = ordena($clientes,$_REQUEST[atrib],'up'); $ordem='down'; BREAK; }
    CASE 'down': {$clientes = ordena($clientes,$_REQUEST[atrib],'down');$ordem='up' ; BREAK; }
}

print "<form method='POST' name='form' id='form'>
            <input type='hidden' value='$ordem' name='ordem' />
            <input type='hidden' value='$atrib' name='atrib' />
       </form>";
print "<table align='center' class='table table-bordered table-ordered table-hover'>
        <caption>LISTA DE CLIENTES</caption>
        <thead>
          <tr>
            <th>
                <a data='$ordem' id='xordem' class='icon-arrow-$ordem' href='#' onclick='document.form.atrib.value=\"codigo\";document.form.submit()' title='$ordem'></a>
            </th>
            <th>Código</th>
            <th><a data='$ordem' class='icon-arrow-$ordem' href='#' onclick='document.form.atrib.value=\"nome\";document.form.submit()' title='$ordem'></a>Nome</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
           </tr>
        </thead>
        <tbody>
      ";

FOREACH($clientes as $id=>$cli)
    print "<tr>
             <td><button id='dialog-link-cliente' href='".$cli->get('codigo')."'><i id='' class='icon-user' href='$id'></i></button></td>
             <td align='center'>".$cli->get('codigo')."</td>
             <td>".$cli->get('nome')."</td>
             <td>".$cli->get('cpf')."</td>
             <td>".$cli->get('endereco')."</td>
             <td>".$cli->get('telefone')."</td>
             <td>".$cli->get('email')."</td>
            </tr>
          ";
print "</tbody></table>";
print "</div>";
?>

<div id="dialog" title="Detalhes"><p></p></div>

<script type="text/javascript">

// Link to open the dialog
//$( "#dialog-link" ).click(function( event ) {
$( " #dialog-link-cliente " ).click(function( event ) {
    $( "#dialog" ).dialog( "open" );
    var href = $( this ).attr('href');
    //$("#dialog").load('./index.html');
    $("#dialog").load('lista_clientes.php?id='+href);
    event.preventDefault();
});


$( "#dialog" ).dialog({
    autoOpen: false,
    width: 400,
    modal:true,
    position: { at: "top center-50" },
    draggable: true,
    buttons: [
        {
            text: "Ok",
            icons: {
                primary: "ui-icon-person"
            },
            click: function() {
                $( this ).dialog( "close" );
            }
        }/*,
        {
            text: "Cancel",
            click: function() {
                $( this ).dialog( "close" );
            }
        }*/
    ]
});
</script>