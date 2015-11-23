<?php
require_once("classes/cliente.class.php");

    $clientes[1]  = new Cliente("1" ,"João Carlos Fernandes", "123.123.123-12","Rua Cinco de Maio, 987","(21) 99876-5432","joao.calos@gmail.com");
    $clientes[2]  = new Cliente("2" ,"Marta Valéria", "333.333.333-11","Rua Cinco de Maio, 87","(21) 98589-4578","marcaval23@terra.com.br");
    $clientes[3]  = new Cliente("3" ,"Homer Simpson", "555.555.555-52","Rua 3 de Março, 7","(21) 96541-7412","homersimpson@burnes.com");
    $clientes[4]  = new Cliente("4" ,"Seu Madruga", "999.999.999-92","Av Dom Pedro, 97","(21) 97452-0012","madruguinha@hotmail.com");
    $clientes[5]  = new Cliente("5" ,"Dona Florinda", "887.887.887-54","Rua 1 de Janeiro, 963","(21) 99876-5432","donaflorinda@yahoo.com.br");
    $clientes[6]  = new Cliente("6" ,"Zeca Urubu", "222.111.222-33","Rua Sete de Setembro, 777","(21) 99801-5427","zeca.urubu@ig.com.br");
    $clientes[7]  = new Cliente("7" ,"Simone dos Santos", "444.555.777-55","Av 15 de Novembro, 141","(22) 99876-4100","simonedossantos42@globo.com");
    $clientes[8]  = new Cliente("8" ,"Ronaldo Nazário de Lima", "443.144.124-44","Alameda Lacerda, 859","(21) 32165-9845","ronaldor9@@r9.com");
    $clientes[9]  = new Cliente("9" ,"Roberto Carlos Coelho", "987.987.987-54","Av Sete de Setembro, 414","(21) 99876-5432","robertocoelho@uol.com.br");
    $clientes[10] = new Cliente("10","Albertina Bonfim", "456.456.456-45","Rua Dois, 44","(22) 2745-5478","albertina.bonfim@gmail.com");


if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];

    print "<fieldset>
            <legend>Dados do Cliente:</legend>
           <table>";
    print "<tr><td>Nome:</td><td>".$clientes[$id]->get("nome")."</td></tr>";
    print "<tr><td>CPF: </td><td>".$clientes[$id]->get("cpf")."</td></tr>";
    print "<tr><td>Endereço: </td><td>".$clientes[$id]->get("endereco")."</td></tr>";
    print "<tr><td>Telefone: </td><td>".$clientes[$id]->get("telefone")."</td></tr>";
    print "<tr><td>E-mail: </td><td>".$clientes[$id]->get("email")."</td></tr>";
    print "<tr><td><a href='./index.php'>Voltar</a></td></tr>";
    print "</fieldset>";

}
?>