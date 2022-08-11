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
				<li><a href="donarita.php" title="Home" alt="Hoe">Home</a></li>
				<li><a href="#" title="Dona Rita" alt="Dona Rita">Dona Rita</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
            
        </div>
    </header>
    <main>
        <section class="main-cardapio">
            
            <?php
                $id = $_GET['id'];

				foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
			?>
			<article class="article-img-descricao">
				<a href="#"><img class="id-img2" src=<?=$value['imagem'];?>></a>               	
			</article>           
            <article class="article-id-descricao">
                <div class="id-descricao" >
                    <h2><?=$value['titulo'];?></h2>
                    <h4><?=$value['tamanho'];?></h4>
				    <h1><?=$value['valor'];?></h1>
                    <h4><?=$value['contato'];?></h4>
                </div>
                <div>
                    <button class="cardapio-btn" type="submit">Comprar</button>
                </div class="cardapio-contato" > 
                              
            </article>
            <article class="box-informacoes">
                <div class="box-informacoes-div" >
                    <h2><?=$value['titulo2'];?></h2>
                    <p><?=substr($value['ingredientes'], 0, 600);?></p>   
                    </article>
            </div>
			<?php
                    }
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