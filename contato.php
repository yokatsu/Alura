<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width">
		<title>Contato - Barbearia Alura</title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style3.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="caixa">
				<h1><img src="imagens/logo.png" alt="Logo da Barbearia Alura"></h1>

				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="produtos.php">Produtos</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>
			<form>
				<label for="nomesobrenome">Nome e sobrenome</label>
				<input type="text" id="nomesobrenome" class="input-padrao" required>

				<label for="email">Email</label>
				<input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

				<label for="telefone">Telefone</label>
				<input type="tel" id="telefone" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

				<label for="mensagem">Mensagem</label>
				<textarea cols="70" rows="10" id="mensagem" class="input-padrao" required></textarea>

				<fieldset>
					<legend>Como prefere o nosso contato?</legend>
					<label for="radio-email"><input type="radio" name="contato" value="email" id="radio-email"> Email</label>
					
					<label for="radio-telefone"><input type="radio" name="contato" value="telefone" id="radio-telefone"> Telefone</label>
					
					<label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked> WhatsApp</label>
				</fieldset>

				<fieldset>
					<legend>Qual horário prefere ser atendido?</legend>
					<select>
						<option>Manhã</option>
						<option>Tarde</option>
						<option>Noite</option>
					</select>
				</fieldset>

				<label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>

				<input type="submit" value="Enviar formulário" class="enviar">
			</form>

			<table>
				<thead>
					<tr>
						<th>Dia</th>
						<th>Horário</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Segunda</td>
						<td>8h ~ 20h</td>
					</tr>
					<tr>
						<td>Quarta</td>
						<td>8h ~ 20h</td>
					</tr>
					<tr>
						<td>Sexta</td>
						<td>8h ~ 20h</td>
					</tr>
				</tbody>
			</table>
		</main>

		<footer>
			<img src="imagens/logo-branco.png" alt="Logo da Barbearia Alura">
			<p class="copyright">&copy; Copyright Barbearia Alura - 2019</p>
		</footer>
	</body>
</html>
