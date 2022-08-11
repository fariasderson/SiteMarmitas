<?php
	include("dadosmarmitas.php");
	
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Rita Marmitas</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
    <link rel="stylesheet" type="text/css" href="estilos1.css">


</head>

<body>
    <header>
        <div class="menu">
            <div class="menulogo">
                <img src="imagem/logo01.png" alt="">
                <h1>Marmitas</h1>
                <h2>Dona Rita</h2>
            </div>
            <ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Dona Rita" alt="Dona Rita">Dona Rita</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
        </div>
    </header>
    <main>
        <section class="main-cardapio">
                <header class="main-cardapio-header2">
                    <h1>Cardápio Dona Rita</h1>
                    <p>Desfrute dos nosso pratos mais variados!</p>
                </header>
            
                <?php
				    foreach($marmitas as $key => $value){
			    ?>
			    <article class="article-box-descricao" >
				    <a href="donarita2.php?id=<?=$value['id'];?>"><img class="id-img" src=<?=$value['imagem'];?>></a>
				    <div class="box-descricao"> 
                        <div class="box-descricao-tamanho" >
                            <h4><?=$value['titulo'];?></h4>
                        </div>
                        <h6><?=$value['tamanho'];?></h6>
				        <h3><?=substr($value['valor'], 0, 150);?></h3>                
                    </div>
			    </article>
			    <?php
				    }
			    ?>
            

        </section>
    </main>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Informações da Empresa</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Blog Dona Rita</a></li>

            </ul>
            <p class="footer-copyright">© Anderson Farias - RA 22222979-5</p>
        </div>
    </footer>


</body>

</html>