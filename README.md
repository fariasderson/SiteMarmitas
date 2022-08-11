![logo](https://user-images.githubusercontent.com/105613391/184236911-634190b5-6cd0-478a-9b4d-dd27ce01e509.png)
# MarmitasDonaRita

Estrutura de site desenvolvido para venda de marmitas ou qualquer produto que queira vender.Este site usa estruturas de repetitição juntamente com matrizes multidimencionais.


##PARTES DO CÓDIGO PAGINA 2.

*LISTA NÃO ORDENADA PARA O CABEÇALHO

<ul>

	<li><a href="donarita.php" title="Home" alt="Hoe">Home</a></li>
				<li><a href="#" title="Dona Rita" alt="Dona Rita">Dona Rita</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>	
</ul>


*ESTRUTURA DE REPETIÇÃO PARA O CORPO DA PAGINA

- Esta estrutura puxa do banco de dados as informações e imprime na tela, ela faz esse processo para cada produto do cardapio

            
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
            
       


**ESTRUTURA DE REPETIÇÃO PARA O CORPO DA PAGINA2

-Esta estrutura de repetição busca as informções no banco de dados, e imprime individualmente as informações de cada produto na segunda pagina.

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
        
*  LISTA NÃO ORDENADA PARA O RODAPÉ
<ul>

                <li><a href="#">Informações da Empresa</a></li>
		
                <li><a href="#">Contato</a></li>
		
                <li><a href="#">Blog Dona Rita</a></li>

            </ul>
	    
	 
	 
## Capturas de Tela


* Cabeçalho da pagina.

![Cabeçalho do Site](https://user-images.githubusercontent.com/105613391/184245506-133c57d5-4508-4061-ada9-ca86a18e4656.png)


* Corpo da pagina.

![Corpo do Site](https://user-images.githubusercontent.com/105613391/184245667-1c205902-eb1f-4be4-82e9-e81df2b785de.png)


* Rodapé da pagina.
	    
![Rodapé do Site](https://user-images.githubusercontent.com/105613391/184245580-68f7122c-aca0-4014-88ca-7220e2ea6587.png)
	    

* Cabeçalho da pagina 2.

![Cabeçalho pagina 2 do Site](https://user-images.githubusercontent.com/105613391/184246052-7929e6e4-096d-4045-9349-679daac9afb9.png)



* Rodapé da pagina 2.
	    
![Rodapé Pagina 2 do Site](https://user-images.githubusercontent.com/105613391/184245920-6d9f382b-aa4c-419d-a2c9-0c482f7e3ad3.png)
	    
	    
