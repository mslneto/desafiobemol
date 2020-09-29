<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>desafioBemol</title>
		<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="stylesheet" type="text/css" href="css/opcoes.css">
		<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	
	</head>
	<body>
		<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Quero Criar uma conta</div>
			<form method="POST" action="salvar_cadastroclientes.php">
				<div class="fitem">
					<label>Email:</label>
					<input name="email"  class="easyui-validatebox" required="true" autofocus>
				</div>
				<div class="fitem">
					<label>Nome Completo:</label>
					<input name="nome_completo" class="easyui-validatebox" required="true">
				</div>
				<div class="fitem">
					<label>CPF:</label>
					<input name="cpf" placeholder="00000000000">
				</div>
				<div class="fitem">
					<label>Data de nascimento:</label>
					<input name="data_nascimento" placeholder="00/00/0000">
				</div>
				
				<div class="fitem">
				<label>Senha (minimo de 6 caracteres):</label>
				<input name="senha" class="easyui-validatebox" required="true" type="password">
			</div>
				
				Quero receber ofertas e conteúdos das empresas do Grupo desafioBemol por:
				<div class="fitem">
				<label>Email?</label>
				<input type = "checkbox" id = "via_email" nome = "via_email" name="via_email" value = "1">
				</div>
				<div class="fitem">
				<label>SMS?</label>
				<input type = "checkbox" id = "via_sms" nome = "via_sms" name="via_sms" value = "1">
				</div>
				<div class="fitem">
				<label>Quero acompanhar o meu pedido por WhatsApp</label>
				<input type = "checkbox" id = "via_whatsapp" nome = "via_whatsapp" name="via_whatsapp" value = "1">
				</div>
				
				<div class="fitem">
				<label>Telefone</label>
				<input name="telefone" class="easyui-validatebox" validType="telefone">
				</div>
				
				<div class="fitem">
				<label>CEP:</label>
				<input type="text" id="cep" name="cep" maxlength="9" placeholder="00000-000" required="true">
				</div>
				<div class="fitem">
				<label>UF:</label>
				<input type="text" id="uf" name="uf">
				</div>
				<div class="fitem">
				<label>Cidade:</label>
				<input type="text" id="cidade" name="cidade">
				</div>
				<div class="fitem">
				<label>Bairro:</label>
				<input type="text" id="bairro" name="bairro">
				</div>
				<div class="fitem">
				<label>Logradouro:</label>
				<input type="text" id="logradouro" name="logradouro">
				</div>	
				<div class="fitem">
				<label>Numero:</label>
				<input type="text" id="numero" name="numero">
				</div>	
				<div class="fitem">
				<label>Complemento:</label>
				<input type="text" id="complemento" name="complemento">
				</div>	
				<input type="submit" value="Continuar" id="cadastrar" name="cadastrar">
			</form>
		</div>
		<script type="text/javascript" src="js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script> 
		<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="js/cep.js"></script> 
	</body>
</html>