<?php 
include_once("conexao.php");

$nome = $_POST['nome'];
$tipo = MD5($_POST['tipo']);
$cpf = $_POST['cpf'];
$tel = $_POST['tel'];
$estado = $_POST['estado'];
$email = $_POST['email'];


$nome = mysqli_real_escape_string($con, $nome);
$tipo = mysqli_real_escape_string($con, $tipo);
$cpf = mysqli_real_escape_string($con, $cpf);
$tel = mysqli_real_escape_string($con, $tel);
$estado = mysqli_real_escape_string($con, $estado);
$email = mysqli_real_escape_string($con, $email);

$sqllogin = "SELECT nome FROM pedido WHERE nome = '$nome'";
$reslogin = mysqli_query($con, $sqllogin);

  if(($nome == "" || $nome == null ) || ($tipo == "" || $tipo == null) || ($cpf == "" || $cpf == null) || ($tel == "" || $tel == null) || ($estado == "" || $estado == null) || ($email == "" || $email == null)){
    echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos !');window.location.href='../contrate.php';</script>";

    }else{
        $sql = "INSERT INTO pedido (nome,tipo,cpf,tel,estado,email) VALUES ('$nome','$tipo','$cpf','$tel','$estado','$email')";
          // executa a consulta
        $res = mysqli_query($con, $sql);
          // fecha a conexão
        mysqli_close($con);
        
        if($res){
          echo"<script language='javascript' type='text/javascript'>alert('Seu pedido foi feito, entraremos em contato em breve !');window.location.href='../index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse Pedido');window.location.href='../contrate.php'</script>";
        }
    }
?>