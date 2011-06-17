<?php echo $this->Html->doctype() ?>
<html>
    <head>
        <title>Mais Revista Cultura</title>
        <?php echo $this->Html->charset()?>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div id="header-caixa">
                    <ul>
                        <li>
                            <?php echo $this->Html->image('logo.png') ?>
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
                        <li><a href="">Destaques</a>|</li>
                        <li><a href="">Cinema</a>|</li>
                        <li><a href="">Teatro & Dança</a>|</li>
                        <li><a href="">Artes Plásticas</a>|</li>
                        <li><a href="">Música</a>|</li>
                        <li><a href="">Filosofia</a></li>
                        <li class="espaco"></li>
                        <li class="espaco"></li>
                        <li class="espaco"></li>
                        <li class="segundo-menu"><a href="">Cadastro</a>|</li>
                        <li class="segundo-menu"><a href="">Loja Virtual</a>|</li>
                        <li class="segundo-menu"><a href="">Contato</a></li>
                    </ul>
                </div>
            </div><!-- HEADER -->

            <div id="content">
                <ul id="colunas">

                    <?php echo $content_for_layout?>

                    <li style="width: 300px; margin-left: 13px; position: absolute; left: 660px; top: 15px">
                        <div id="box-right">
                            <ul id="login-social">
                                <li><a href="" class="faca-login">Faça seu login <?php echo $this->Html->image('key-icon.png')?></a></li>
                                <li></li>
                            </ul>
                            <ul id="search-box">
                                <?php echo $this->Form->create('Artigo', array('action'=>'busca'))?>
                                <li><?php echo $this->Form->input('q', array('label'=>''))?></li>
                                <li><?php echo $this->Form->submit()?></li>
                                <?php echo $this->Form->end()?>
                            </ul>
                            <br />
                            <p>Publicidade</p>
                            <div class="publicidade-square">
                                
                            </div>
                            <br />
                            <br />
                            <div class="box-tracejado">
                                <span class="editoria padrao">DÊ SUA OPINIÃO</span>
                            </div>
                        </div>
                    </li><!-- Direita -->

                </ul>
            </div><!-- CONTENT -->

        </div>
    </body>
</html>