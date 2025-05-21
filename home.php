<html>
<head>
<title>Home </title>
<script type="text/javascript">
  alert('Bem vindo!');
</script>

<script src="script.js" defer></script>
</head>
<style>
body{
  background-image: url("19.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}





div {
  background: none;
  width: 240px;
  height: 200px;
  margin: 20px;
  color: white;
  resize: vertical;
  overflow: none;
  padding: 1
  80px;
}

#imgpos {
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-410px;
		margin-top:-10px;
		}
	
	*{margin:0;padding:0;box-sizing: border-box;}
	 form{
	     background-color: white;
		 max-width: 250px;
		 width:25%;
		 padding:20px;
		 position:absolute;
		 left: 50%;
		 top: 50%;
		 transform: translate(-50%,-50%);
	}
	 form input[type=submit]{
	     width:100%;
		 height: 20px;
		 margin-top:10;
		 cursor: pointer;
		 background:turquoise;
		 color:white;
		 border:0;
		 border-radius:10px;
    
	}
	form input[type=submit]:hover{
	     background-color:black;
	
	}
	form input[type=text],
    form input[type=password]{
	     width:100%;
		 height:22,5px;
		 border:1px solid #ccc;
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

<body background="19.jpeg">
<font color="white" size="500" face="optima">


<img src="LOGO---.PNG" size="25%" width="220" height="80" id="imgpos">



                   

<form method="post" action="proccess.php">


<font color="black" face="impact" size=5%>
<h4>Área de acesso</h4>
</font>
<font color="darkred" size=5%><i>

<p>E-mail
<input type="text" name="email" placeholder="Digite seu e-mail">
<p>Senha
<input type="password" name="password" placeholder="Digite sua senha"><p>

<input type="submit" value="Login">
<p>Não é cadastrado?
<a href="cadastro.php" target="conteudo">CADASTRE-SE</a>

</form>
</body>
</html>


