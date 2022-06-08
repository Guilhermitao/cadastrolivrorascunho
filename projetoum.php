<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=width-device initial-scale=1.0">
	<title></title>
	<style type="text/css">
	#formulario{
		width: 25%;
		margin: auto;
		background-color:brown;
		padding: 50px;
		background-image: url();
        
	}	
    body{
        background-color: none;
		background-image: url(https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGlicmFyaWVzfGVufDB8fDB8fA%3D%3D&w=1000&q=80);

    }
    label{
        font-size: 30px;
		color: white;
    }
	textarea{
		height: 250px;
		width: 300px;
		resize: none;
		font-size: 20px;;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
    #titulo{
        font-size: 19px;
    }
    #autor_livro{
        font-size: 19px;
    }
	#editora_livro{
		font-size: 19px;
	}

	#genero_livro{
		font-size: 19px;
	}
	#isbn_livro{
		font-size: 19px;
	}
	#serie_livro{
		font-size: 19px;
	}
	#data_livro{
		font-size: 19px;
	}
	h3{
		color: white;
		font-size: 25px;
		text-align: center;
	}
	h1{
	    color: white;
		font-size: 35px;
		text-align: center;
	}
	#enviar{
		display: block;
		margin-left: auto;
		margin-right: auto;
		block-size: 30px;
	}
	#limpar{
		display: block;
		margin-left: auto;
		margin-right: auto;
		block-size: 30px;
	}
	</style>
</head>
<body>
<div id="formulario">
	<form name="form1" action="dadosprojetoum.php" method="post">
		<table>
			<tr>
				<h1>Cadastro de Livro</h1>
				<td><label>Titulo do livro:</label></td>
<td><input type="text" name="titulo_livro" placeholder="Digite Aqui" id="titulo"></td>
			</tr>
			<tr>
				<td><label>Autor do Livro:</label></td>
				<td><input type="text" name="autor" id="autor_livro"></td>
			</tr>
			<tr>
				<td><label>Editora:</label></td>
        <td><input type="text" required name="editora" id="editora_livro"></td>
			</tr>         
		</table>
    <tr>
		<td><label>Genero do Livro:</label></td>
        <td><input type="text" required name="genero" id="genero_livro"></td>
			</tr>
		
			<tr>
		<td><label>ISBN:</label></td>
        <td><input type="text" required name="isbn" id="isbn_livro"></td>
			</tr>
			<br>
			<tr>
		<td><label>Serie do Livro:</label></td>
        <td><input type="text" required name="serie" id="serie_livro"></td>
			</tr>
			<tr>
		<td><label>Data de publicacão:</label></td>
        <td><input type="date" required name="data" id="data_livro"></td>
			</tr>
    <h3>Sinopse do Livro</h3>
    <textarea name="sinopse" id="sinopse_livro"></textarea><br>

		<input type="submit" value="Enviar" id="enviar">
		<input type="reset" value="Limpar Formulário" id="limpar">
	</form>
</div>
</body>
</html>


