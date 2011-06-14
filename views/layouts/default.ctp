<?php echo $this->Html->doctype() ?>
<html>
    <head>
        <title>Mais Revista Cultura</title>
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
                    <li style="width: 320px">
                        <div class="destaque">
                            <div class="img"></div>
                            <span class="editoria artes-plasticas">Artes Plásticas</span>
                            <br />
                            <br />
                            <h3>Titulo da máteria</h3>
                            <p>começo da máteria vem aqui e tem limite de caracteres</p>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 110px;"><span class="img-pequena"></span></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria cinema">Cinema</span>
                                    <br />
                                    <br />
                                    <h2>O titulo da materia vai aqui</h2>
                                </li>
                            </ul>
                        </div>

                        <div class="destaque">
                            <span class="editoria musica">Música</span>
                            <br />
                            <br />
                            <h3>Titulo da máteria</h3>
                            <p>começo da máteria vem aqui e tem limite de caracteres</p>
                            <br />
                        </div>

                        <div class="destaque-lista">
                            <span class="editoria filosofia">Filosofia</span>
                            <br />
                            <ul id="materias-lista" >
                                <li><a href=""><?php echo $this->Html->image('disc.png', array('style'=>'margin-right: 4px;'))?> Titulo vai aqui</a></li>
                                <li><a href=""><?php echo $this->Html->image('disc.png', array('style'=>'margin-right: 4px;'))?> Titulo vai aqui</a></li>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 110px;"><span class="img-pequena"></span></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria cinema">Cinema</span>
                                    <br />
                                    <br />
                                    <h2>O titulo da materia vai aqui</h2>
                                </li>
                            </ul>
                        </div>

                        <div class="publicidade-botao">
                            
                        </div>
                    </li> <!-- Esquerda -->

                    <li  style="width: 320px; margin-left: 12px;">
                        <div class="destaque-sem-img">
                            <span class="editoria livros">Livros</span>
                            <br />
                            <br />
                            <h1>Titulo da máteria</h1>
                            <p>começo da máteria vem aqui e tem limite de caracteres</p>
                            <br />
                        </div>
                        <br />
                        <br />
                        <div class="destaque-lista">
                            <span class="editoria filosofia">Filosofia</span>
                            <br />
                            <ul id="materias-lista" >
                                <li><a href=""><?php echo $this->Html->image('disc.png', array('style'=>'margin-right: 4px;'))?> Titulo vai aqui</a></li>
                                <li><a href=""><?php echo $this->Html->image('disc.png', array('style'=>'margin-right: 4px;'))?> Titulo vai aqui</a></li>
                            </ul>
                            <br />
                        </div>
                    </li><!-- Centro -->

                    <li style="width: 300px; margin-left: 13px;">
                        <div class="destaque">
                            <div class="img"></div>
                            <span class="editoria artes-plasticas">Artes Plásticas</span>
                            <br />
                            <br />
                            <h1>Titulo da máteria</h1>
                            <p>começo da máteria vem aqui e tem limite de caracteres</p>
                            <br />
                        </div>
                    </li<!-- Direita -->

                </ul>
            </div><!-- CONTENT -->

        </div>
    </body>
</html>