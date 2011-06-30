<li style="width: 658px; float: left ">
    <div id="nome-secao">
        MATÉRIAS > <b style="text-transform: uppercase"><?php echo $artigo['Editoria']['nomeEditoria'] ?></b>
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
        
        <div class="text" style="margin-top:20px;">
            <p><?php echo $artigo['Artigo']['texto'] ?></p>
        </div>


        <div id="linha-divisao" style="margin-bottom:6px;"></div>

        <ul id="compartilhar">
            <li class="compartilhar" style="top: 5px; position: relative;"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.maisrevistacultura.com.br/artigos/ver/<?php echo $artigo['Artigo']['id'] ?>/<?php echo Inflector::slug($artigo['Artigo']['titulo']) ?>" data-count="horizontal" data-via="editorcriacao" data-lang="pt">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
            <li class="imprimir"> <a href="#" id="imprimir" title="Imprimir"><?php echo $this->Html->image('icone_imprimir.gif', array('style' => 'margin-bottom:-3px;')) ?></a></li>
            <li class="enviar"> <a href="#" title="Enviar por e-mail"> <?php echo $this->Html->image('icone_enviar.gif', array('style' => 'margin-bottom:-3px;')) ?></a></li>
            <li class="fonte"> FONTE <a href="#" id="aumentar" title="Aumentar fonte"><?php echo $this->Html->image('icone-mais.png', array('style' => 'margin-bottom:-3px;')) ?></a> <a href="" id="diminuir" title="Diminuir fonte"><?php echo $this->Html->image('icone-menos.png', array('style' => 'margin-bottom:-3px;')) ?></a> </li>
        </ul>

        <div id="linha-divisao" style="margin-top: 8px;"></div>


        <div id="faixa-listrada" style="margin-top: 30px; width: 650px; margin-bottom: -20px;"></div>
        <div id="fundo-titulo" style="margin-left: 0;">COMENTÁRIOS</div>

        <br />

        <ul id="comentarios">
            <?php echo $this->Html->image('spinner.gif', array('id' => 'loading')) ?>
        </ul>

        <br>
        <div id="caixa-cinza" style="height: 95px; margin-left: 10px; margin-top: -10px;">
            <br />
            <div id="colunas-formulario-2">
                <?php echo $this->Form->create('Comentario', array('action' => 'adicionar', 'id' => 'formulario-comentarios')) ?>
                <?php echo $this->Form->input('comentario', array('label' => '', 'id' => 'comente', 'type' => 'textarea', 'style' => 'width: 580px; height: 50px', 'value' => 'Deixe seu comentário')) ?>
                <?php echo $this->Form->input('site', array('type' => 'hidden', 'value' => '4')) ?>
                <?php echo $this->Form->input('artigo_id', array('type' => 'hidden', 'value' => $artigo['Artigo']['id'])) ?>
                <div id="resto-elementos" style="display: none">
                    <?php echo $this->Form->input('nome', array('label' => 'Nome Completo', 'size' => '80')) ?>
                    <?php echo $this->Form->input('email', array('label' => 'Seu E-mail*', 'size' => '80', 'id' => 'email-input')) ?>
                    <?php echo $this->Form->input('sitepessoal', array('label' => 'Seu Site', 'size' => '80')) ?>
                    <ul id="regiao" style="margin-left: 1px;">
                        <li ><?php echo $this->Form->input('cidade', array('label' => 'Cidade')) ?> </li>
                        <li> <?php echo $this->Form->input('estado', array('label' => ' Estado')) ?></li>
                    </ul>
                    <?php echo $this->Form->submit('ENVIAR') ?>
                </div>

            </div>
            <br>
        </div>
</li>
<script type="text/javascript">
    $(document).ready(function(){
        $("#loading").hide();
        $("#loading").ajaxStart(function(){
            $(this).show();
        });

        function comentarios(){
            $.ajax({
                url: '<?php echo $this->Html->url(array('controller' => 'comentarios', 'action' => 'verComentarios', $artigo['Artigo']['id'])) ?>',
                dataType: 'html',
                success: function(data){
                    $("#comentarios").html(data);
                }
            });
        }

        comentarios();



        $("#comente").focus(function(){
            $("#caixa-cinza").css({height: '400px'}).fadeIn();
            $("#comente").animate({height: '200px'});
            $("#resto-elementos").fadeIn();
        });

        $("#formulario-comentarios").submit(function(){

            var email = $("#email-input").val();

            if(email == ''){
                alert('O campo E-MAIL é obrigatorio!');
                return false;
            }
        });
        

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


