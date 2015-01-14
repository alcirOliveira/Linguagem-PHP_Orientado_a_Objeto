<?php  
  
class Connection{

   // declarando as variáveis
   var $server = "localhost"; // localhost - endereço do servidor
   var $user = "root";        // usuário
   var $pass = "senha";       // senha
   var $database = "teste";   // banco
 
   //Criando um método construtor "Método mágico"
   function __construct(){
      $this->Connect(); // Método a ser chamado para conectar ao banco
   }
 
   // Função para falha de conexão
   function Connect(){
      if(!($connect = mysql_connect($this->server, $this->user, $this->pass))){
         echo "Falha na conexão!";
      }else{
         if(!($con = mysql_select_db($this->database,$connect))){
            echo "Não foi possível conectar ao banco!";
         }
      }
   }
}
  
?> 