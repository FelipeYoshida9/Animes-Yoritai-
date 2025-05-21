<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>  </title>
<link
rel="stylesheet"
type="text/css"
href="mystyle.css"/>

</head>
<style>

*{margin:0;padding:0;box-sizing: border-box;}
	 form{
	     background-color:white;
		 max-width: 500px;
		 width:50%;
		 height:70%;
		 padding:20px;
		 position:absolute;
		 left: 50%;
		 top: 50%;
		 transform: translate(-50%,-50%);
	}
	 form input[type=submit]{
	     width:100%;
		 height: 40px;
		 margin-top:10;
		 cursor: pointer;
		 background:turquoise;
		 color:white;
		 border:0;
		 border-radius:20px;
    
	}
	form input[type=submit]:hover{
	     background-color:black;
	
	}
	form input[type=text],
    form input[type=email]{
	     width:40%;
		 height:45px;
		 border:5px solid #ccc;
         padding-left: 10px;	
    }
	form input[type=password]{
         width:100%;
		 height:45px;
         border:5px solid #ccc;
         padding-left: 10px;	
	}
	a:link{
	     text-decoration: none;
	}
	a:hover{
	     text-decoration: underline;
		 color: yellow;
	}
	form h4{
	     text-align: center;
	
	
	}

</style>
<body>



<form method="post" action="cadastrar.php">
<font color="black" size=24%>
<h4>Cadastre seu Usuário</h4>
</font>


<input type="text" name="nome" placeholder="Digite seu nome">

<input type="email" name="email" placeholder="Digite seu e-mail"><p><p>

<input type="password" name="password" placeholder="Cadastre uma nova senha">

<input type="password" name="password2" placeholder="Digite novamente sua senha">
<label>Gênero</label>
<label>
<input type="radio" name="any" value="masculino">Masculino
</label>
<label>
<input type="radio" name="any" value="Feminino">Feminino    
</label>
<p><div>
<label>Você é/curte</label>
<select id="curte mais">
<option selected disabled value=""></option>
<option>Otaku</option>
<option>Pequeno otaku</option>
<option>Novato</option>
<option>Não sei onde estou</option>
</div>
<p><p>
<fieldset class="grupo">
<div class="campo">
<label>Curte mais</label>
<input type="checkbox" name="op1" value="anime">
<label for="op1">Anime</label>
<input type="checkbox" name="op2" value="mangas">
<label for="op2">Mangás</label>
<input type="checkbox" name="op3" value="lightnovel">
<label for="op3">Light novel</label>
<input type="checkbox" name="op4" value="curtotodos">
<label for="op4">Curto Todos</label>
</div>
</fieldset>
<p><a href="home.html" target="conteudo">Fazer login</a>
<input type="submit" name="acao" value="cadastrar">
<input type="hidden" name="form" value="f_form">
</form>
</body>
</html>