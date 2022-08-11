<?php

    $title = "Marmitas Dona Rita";

    $marmitas = array(
        0 => array('id'=>'1', 'titulo'=>'Carne assada bovino', 'tamanho'=> '520g' , 
        'valor'=>'R$ 45,70','imagem'=>'imagem/m1.jpg','contato'=>'Pedido de marmitas: (49)99146-7771', 'titulo2'=>'Ingredientes',
        'ingredientes'=> '<br><br><br>
        - 1 1/5 kg de alcatra<br><br>
        - 1 colher (chá) de sal <br><br>
        - 1 colher (café) de pimenta-do-reino branca<br><br>
        - 5 dentes de alho amassado<br><br>
        - 1 colher (sopa) de mostarda<br><br>
        - 2 colheres (sopa) de salsinha picadinha<br><br>
        - 1 folha de louro<br><br>
        - 3 colheres (sopa) de óleo de soja<br><br>
        - 1 unidade de cebola ralada<br><br>
        - 1/2 xícara (chá) de molho de tomate<br><br>
        - 1/2 xícara (chá) de azeitona verde picadinha<br><br>
        - 500 gr de batata'),

        1 => array('id'=>'2', 'titulo'=>'Leitão pururuca', 'tamanho'=> '450g' ,
        'valor'=>'R$ 35,90','imagem'=>'imagem/m9.jpg','contato'=>'Pedido de marmitas: (49)99146-7771', 'titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>- 1 leitão de aproximadamente 8 kg<br><br>
        - 2 colheres de sal<br><br>
        - 1/2 kg de cebola<br><br>
        - 1/2 kg de pimentão<br><br>
        - 1 cabeça de alho<br><br>
        - 3 maços de coentro (cheiro verde)<br><br>
        - 2 colheres sopa de pimenta-do-reino<br><br>
        - 50 g de colorau<br><br>
        - 3 colheres de catchup<br><br>
        - 5 folhas de louro<br><br>
        - 250 g de margarina<br><br>
        - 1 vidro de glucose de milho (mel karo)<br><br>
        - 1 garrafa de vinho tinto<br><br>
        - 1 garrrafa de vinagre'),

        4 => array('id'=>'5', 'titulo'=>'Espaguete ao molho de tomate', 'tamanho'=> '350g' ,
        'valor'=>'R$ 18,90','imagem'=>'imagem/m5.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 1 pacote de espaguete<br><br>
        - 1 litro de água<br><br>
        - 1 cebola pequena<br><br>
        - 6 dentes de alho<br><br>
        - óleo para fritar<br><br>
        - molho de tomate<br><br>
        - 1 colher (sopa) de mostarda<br><br>
        - pimenta-do-reino<br><br>
        - orégano<br><br>'),
        
        5 => array('id'=>'6', 'titulo'=>'Salada de rabanete', 'tamanho'=> '280g' ,
        'valor'=>'R$ 13,90','imagem'=>'imagem/m6.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 5 folhas de alface<br><br>
        - 3 rabanetes picados<br><br>
        - 3 tomates<br><br>
        - Gotas de limão (sem açúcar) a gosto<br><br>'),
      
        6 => array('id'=>'7', 'titulo'=>'Salada de frango', 'tamanho'=> '500g' ,
        'valor'=>'R$ 21,90','imagem'=>'imagem/m7.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br>
        - 1 litro de água<br><br>
        - 1 colher de sopa de sal<br><br>
        - 1 peito de frango com pele e osso (para dar sabor)<br><br>
        - 5 batatas cruas<br><br>
        - 2 cenouras cruas<br><br>
        - 4 cebolas grandes<br><br>
        - 1/2 xícara de azeitonas picadas<br><br>
        - 1/2 xícara de azeite<br><br>
        - 1 sachê de molho de tomate pronto<br><br>
        - Salsinha e cebolinha a gosto<br><br>'),
         
        7 => array('id'=>'8', 'titulo'=>'Couve refogada', 'tamanho'=> '200g' ,
        'valor'=>'R$ 10,90','imagem'=>'imagem/m11.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 1 pé de couve grande<br><br>
        - 3 dentes de alho grande<br><br>
        - 1 colher (sopa) cheia de margarina<br><br>
        - 1 folha de louro<br><br>
        - sal a gosto<br><br>'),
        
        9 => array('id'=>'10', 'titulo'=>'Curry de frango com arroz', 'tamanho'=> '390g' ,
        'valor'=>'R$ 18,90','imagem'=>'imagem/m13.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 1 peito de frango<br><br>
        - 1 raiz média de gengibre triturado<br><br>
        6 dentes de alho triturados<br><br>
        - 1 cebola média picadinha<br><br>
        - 6 tomates maduros picadinhos<br><br>
        - Sal a gosto<br><br>
        - Pimenta do reino<br><br>
        - 1 colher de chá cheia de curry<br><br>
        - Óleo<br><br>
        - Cheiro verde<br><br>'),
        
        10 => array('id'=>'11', 'titulo'=>'Bistecas de porco gralhada', 'tamanho'=> '620g' ,
        'valor'=>'R$ 16,90','imagem'=>'imagem/m14.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 1 kg de bisteca de porco<br><br>
        - suco de 2 limões<br><br>
        - 3 dentes de alho picados ou amassados<br><br>
        - pimenta-do-reino preta moída a gosto<br><br>
        - sal a gosto<br><br>
        - alecrim fresco a gosto<br><br>
        - chimichurri a gosto<br><br>'),
       
        11 => array('id'=>'12', 'titulo'=>'Bife de salmão frito com legumes','tamanho'=> '420g' ,
        'valor'=>'R$ 18,90','imagem'=>'imagem/m15.jpg','contato'=>'Pedido de marmitas: (49)99146-7771','titulo2'=>'Ingredientes',
        'ingredientes'=>'<br><br><br>
        - 2 postas de salmão<br><br>
        - Sal<br><br>
        - Sumo de 2 limões<br><br>
        - 1 colher (chá) de massa de alho<br><br>
        - 1 pitada de sal<br><br>
        - Coentro picado a gosto<br><br>
        - 50 ml de azeite<br><br>
        - 1 raminho de coentro<br><br>'),
    );
?>