<li id="largura_texto" style="float:left;">
    <div id="nome-secao">
        MATÉRIAS > <span style="font-weight:bold; text-transform: uppercase"><?php echo $artigo['Editoria']['nomeEditoria']?></span>
    </div>
    <div id="materia">
        <h1><?php echo $artigo['Artigo']['titulo'] ?></h1>
        <h2><?php echo $artigo['Artigo']['subTitulo'] ?></h2>
        <div id="linha-divisao"></div>
        <h5>Por: <?php echo $artigo['Colunista']['nomeColunista'] ?></h5>
        <?php if (!empty($artigo['Artigo']['imagemMateria'])) {
        ?>
        <?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-materia/' . $artigo['Artigo']['imagemMateria']) ?>
            <h4><?php echo $artigo['Artigo']['legendaFotoMateria'] ?></h4>
        <?php } ?>
        <br>
        <div class="text">
            <p><?php echo $artigo['Artigo']['texto'] ?></p>
        </div>
        

        <div id="linha-divisao"></div>

        <ul id="compartilhar">
            <li class="compartilhar"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.maisrevistacultura.com.br/artigos/ver/<?php echo $artigo['Artigo']['id'] ?>/<?php echo Inflector::slug($artigo['Artigo']['titulo']) ?>" data-count="horizontal" data-via="editorcriacao" data-lang="pt">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
            <li class="imprimir"> <a href="#" id="imprimir" title="Imprimir"><?php echo $this->Html->image('icone_imprimir.gif', array('style' => 'margin-bottom:-3px;')) ?></a></li>
            <li class="enviar"> <a href="#" title="Enviar por e-mail"> <?php echo $this->Html->image('icone_enviar.gif', array('style' => 'margin-bottom:-3px;')) ?></a></li>
            <li class="fonte"> FONTE <a href="#" id="aumentar" title="Aumentar fonte"><?php echo $this->Html->image('icone-mais.png', array('style' => 'margin-bottom:-3px;')) ?></a> <a href="" id="diminuir" title="Diminuir fonte"><?php echo $this->Html->image('icone-menos.png', array('style' => 'margin-bottom:-3px;')) ?></a> </li>
        </ul>

        <div id="linha-divisao" style="margin-top: 8px;"></div>


        <div id="faixa-listrada" style="margin-top: 30px; width: 650px; margin-bottom: -20px;"></div>
        <div id="fundo-titulo" style="margin-left: 0;">COMENTÁRIOS</div>

        <br />

        <ul id="comentarios">
            <li>
                <h5><span><a href="#" style="color: #00547a; font-weight: bold" target="_blank"> Nome da pessoa</a></span> disse:</h5>
                <p>Comentario da pessoa mais aqui...</p>
            </li>
             <div id="linha-divisao" style="margin-top: 8px;"></div>
            
        </ul>

        <br>
        <div id="caixa-cinza" style="height: 95px; margin-left: 10px; margin-top: -10px;">
            <h3 style="margin-left:5px;">Colocar a caixa de comentários aqui</h3>
            <br />
            <div id="colunas-formulario-2">

            </div>

        </div>
        <br>
    </div>
</li>
<script type="text/javascript">
    $(document).ready(function(){

        

        $("#aumentar").click(function(e){
            e.preventDefault();
            var cssObj = {
                'font-size' : '16px'
            }
            $("#materia p").css(cssObj);
            return false;
        });

        $("#diminuir").click(function(e){
            e.preventDefault();
            var cssObj = {
                'font-size' : '14px'
            }
            $("#materia p").css(cssObj);
            return false;
        });
    });
</script>


