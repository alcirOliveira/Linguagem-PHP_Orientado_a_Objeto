<?php
   //  Incluindo o arquivo de conexão ao banco de dados
   require_once('conexao.php');
	 
   class User{
      function __construct(){
         $objConnection = new Connection();
      }

      function Login($usuario, $senha){
         // se os campos estiverem vazio
         if (empty($usuario) or empty($senha)) { 
              // uma janela de alerta informa que os dados é inválido e retorna a página anterior
              print "<script>alert('Preencha o campo vazio.');history.back();</script>"; 
         }else{
            // comando SQL para selecionar os dados
            $query = "SELECT * FROM tbl_usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            // executa a query
            $dados = mysql_query($query);
            // traz o resultado da consulta acima em numérico 0 ou 1
            $number = mysql_num_rows($dados);
	 
            if($number == 1){
               // se positivo entra em outra página onde poderá ter todo o acesso
               header("location: entrada.php");
            }else{
               // entra na página que informa que o usuário ou senha é inválida
               header("location: acessoNegado.php");
            }
         }
      }
   }
?>