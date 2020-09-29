<?php

$email = $_REQUEST['email'];
$nome_completo = $_REQUEST['nome_completo'];
$cpf = $_REQUEST['cpf'];
$data_nascimento = implode('-', array_reverse(explode('/', $_REQUEST['data_nascimento'])));
$senha = md5($_REQUEST['senha']);

$via_email = $_REQUEST['via_email'];
$via_sms = $_REQUEST['via_sms'];
$via_whatsapp = $_REQUEST['via_whatsapp'];

$telefone = $_REQUEST['telefone'];
$cep = $_REQUEST['cep'];
$uf = $_REQUEST['uf'];
$cidade = $_REQUEST['cidade'];
$bairro = $_REQUEST['bairro'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];


include 'conn.php';

//$sql = "insert into usuarios(EMAIL,NOME_COMPLETO,CPF) values('1','1','1')";
//$sql = "insert into usuarios(EMAIL,NOME_COMPLETO,CPF,DATA_NASCIMENTO,SENHA,VIA_EMAIL,VIA_SMS,VIA_WHATSAPP,TELEFONE,CEP,UF,CIDADE,BAIRRO,LOGRADOURO,NUMERO,COMPLEMENTO,DATA_CADASTRO,ULTIMO_ACESSO,STATUS) values('mslneto@gmail.com','Manoel Sarmento Lima Neto','98438077234','1988-10-24','$senha',1,1,1,'(92) 991983323','69077-795','AM','Manaus','Japiim','Rua Jose de Alencar','4131','Bl. 9A, apt 202',now(),now(),1)";
$sql = "insert into usuarios(EMAIL,NOME_COMPLETO,CPF,DATA_NASCIMENTO,SENHA,VIA_EMAIL,VIA_SMS,VIA_WHATSAPP,TELEFONE,CEP,UF,CIDADE,BAIRRO,LOGRADOURO,NUMERO,COMPLEMENTO,DATA_CADASTRO,ULTIMO_ACESSO,STATUS) values('$email','$nome_completo','$cpf','$data_nascimento','$senha','$via_email','$via_sms','$via_whatsapp','$telefone','$cep','$uf','$cidade','$bairro','$logradouro','$numero','$complemento',now(),now(),1)";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao inserir dados.'));
}
?>
