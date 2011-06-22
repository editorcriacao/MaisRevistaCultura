<?php echo $this->Html->doctype() ?>
<html>
    <head>
        <title>Mais Revista Cultura</title>
        <?php echo $this->Html->charset()?>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia', 'icon')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div id="header-caixa">
                    <ul>
                        <li>
                            <span style="margin-left: 2px;"><?php echo $this->Html->image('logo.png') ?></span>
                            <p class="data"><?php
                            $dia = date('d');
                            $mes = date('n');
                            $ano = date('Y');
                            switch ($mes) {
                                case 1:
                                    echo '<span class="data-topo">' . $dia . '</span> de Janeiro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 2:
                                    echo '<span class="data-topo">' . $dia . '</span> de Fevereiro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 3:
                                    echo '<span class="data-topo">' . $dia . '</span> de Março de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 4:
                                    echo '<span class="data-topo">' . $dia . '</span> de Abril de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 5:
                                    echo '<span class="data-topo">' . $dia . '</span> de Maio de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 6:
                                    echo '<span class="data-topo">' . $dia . '</span> de Junho de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 7:
                                    echo '<span class="data-topo">' . $dia . '</span> de Julho de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 8:
                                    echo '<span class="data-topo">' . $dia . '</span> de Agosto de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 9:
                                    echo '<span class="data-topo">' . $dia . '</span> de Setembro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 10:
                                    echo '<span class="data-topo">' . $dia . '</span> de Outubro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 11:
                                    echo '<span class="data-topo">' . $dia . '</span> de Novembro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                                case 12:
                                    echo '<span class="data-topo">' . $dia . '</span> de Dezembro de <span class="data-topo">' . $ano . '</span>';
                                    break;
                            }
                            ?></p>
                        </li>
                        <li>
                            <div class="publicidade-top"></div>
                        </li>
                    </ul>

                    <ul id="menu">
                        <li style="margin-left: 3px;"><a href="">Destaques</a>|</li>
                        <li><a href="">Cinema</a>|</li>
                        <li><a href="">Teatro & Dança</a>|</li>
                        <li><a href="">Artes Plásticas</a>|</li>
                        <li><a href="">Música</a>|</li>
                        <li><a href="">Livros</a>|</li>
                        <li><a href="">Filosofia</a></li>
                        <li class="espaco"></li>
                        <li class="espaco"></li>
                        <li class="segundo-menu" style="margin-left: 16px !important;"><a href="">Cadastro</a>|</li>
                        <li class="segundo-menu"><a href="">Loja Virtual</a>|</li>
                        <li class="segundo-menu" style="padding-right: 0 !important;"><a href="" style="padding-right: 0 !important; margin-right: 0 !important;">Contato</a></li>
                    </ul>
                </div>
            </div><!-- HEADER -->

            <div id="content">
                <ul id="colunas">

                    <?php echo $content_for_layout?>

                    <li style="width: 300px; margin-left: 13px; position: absolute; left: 660px; top: 0;">
                        <div id="box-right">
                            <ul id="login-social">
                                <li><a href="" class="faca-login">Faça seu login <?php echo $this->Html->image('key-icon.png')?></a></li>
                                <li>
                                    <ul id="icons">
                                        <li><a href="" title="Entre em contato"><span class="email" style="margin-left: 8px;"></span></a></li>
                                        <li><a href="" title="Linkedin"><span class="linkindin"></span></a></li>
                                        <li><a href="" title="Facebook"><span class="facebook"></span></a></li>
                                        <li><a href="" title="Twitter"><span class="twitter"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul id="search-box" style="border: 1px solid white;">
                                <?php echo $this->Form->create('Artigo', array('action'=>'busca'))?>
                                <li><?php echo $this->Form->input('q', array('label'=>''))?></li>
                                <li><?php echo $this->Form->submit(' ', array('class'=>'lupa'))?></li>
                                <?php echo $this->Form->end()?>
                            </ul>
                            <br />
                            <p>Publicidade</p>
                            <div class="publicidade-square">
                                
                            </div>
                            <br />
                            <div class="box-tracejado">
                                <span class="editoria galeria">GALERIA DE FOTOS</span>
                                <br />
                                <br />
                                <span class="link"><a href="">> MAIS GALERIAS</a></span>
                            </div>
                            <br />
                            <span class="destaque"></span>
                            <span class="editoria destaque-cor">DESTAQUES</span>
                            <br />
                            <ul id="materias-lista" >
                                <?php $destaquesLista = $this->requestAction(array('controller'=>'artigos', 'action'=>'destaquesLista')) ?>
                                <?php foreach($destaquesLista as $d){?>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $d['Artigo']['id'], Inflector::slug($d['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $d['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                            <br>
                             <span class="destaque"></span>
                            
                            <div class="box-tracejado" style="padding-bottom:-50px !important;">
                                <span class="editoria padrao">DÊ SUA OPINIÃO</span>
                                <br />
                                <br />
                                <span class="editoria enquete">ENQUETE</span>
                                <br />
                                <br />
                                <h3>O titulo da materia vem aki?</h3>
                                <p style="margin-top:11px;"><a href="">+ Votar</a></p>
                                <p style="margin-top:5px;"><a href="">+ Ver Resultado</a></p>
                            </div>
                        </div>
                     
                        <br />
                        
                        <div class="publicidade-botao">
                            <p>Publicidade</p>
                            <span></span>
                            <br />
                        </div>
                    </li><!-- Direita -->

                </ul>
            </div><!-- CONTENT -->

        </div>
        <br />
        <br />
    </body>
</html>
