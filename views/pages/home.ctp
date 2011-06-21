                  <li style="width: 320px; position: absolute; top: 15px">
                       <?php $destaque = $this->requestAction(array('controller'=>'artigos', 'action'=>'destaque'))?>
                         <div class="destaque">
                            <div class="img"></div>
                            <span class="editoria <?php echo Inflector::slug($destaque['Editoria']['nomeEditoria'])?>"><a href=""><?php echo $destaque['Editoria']['nomeEditoria']?></a></span>
                            <br />
                            <br />
                            <h3><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $destaque['Artigo']['titulo']?></a></h3>
                            <p><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $this->Text->truncate($destaque['Artigo']['subTitulo'], 120)?></a></p>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                             <?php $mostrarMusica = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarMusica'))?>
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 110px;"><span class="img-pequena"></span></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria musica"><a href="">Música</a></span>
                                    <br />
                                    <br />
                                    <h2><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarMusica['Artigo']['id'], Inflector::slug($mostrarMusica['Artigo']['titulo'])))?>"><?php echo $mostrarMusica['Artigo']['titulo']?></a></h2>
                                </li>
                            </ul>
                        </div>

                        <div class="destaque">
                            <span class="editoria cinema">Cinema</span>
                            <br />
                            <br />
                            <?php $mostrarCinemaSemImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarCinemaSemImg')) ?>
                            <h3><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaSemImg['Artigo']['id'], Inflector::slug($mostrarCinemaSemImg['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaSemImg['Artigo']['titulo']?></a></h3>
                            <p><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaSemImg['Artigo']['id'], Inflector::slug($mostrarCinemaSemImg['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaSemImg['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                        <div class="destaque-lista">
                            <span class="editoria filosofia">Filosofia</span>
                            <br />
                            <ul id="materias-lista" >
                                <?php $listarFilosofia = $this->requestAction(array('controller'=>'artigos', 'action'=>'listarFilosofia')) ?>
                                <?php foreach($listarFilosofia as $f){?>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $listarFilosofia['Artigo']['id'], Inflector::slug($listarFilosofia['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $f['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 110px;"><span class="img-pequena"></span></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria artes-plasticas">Artes Plásticas</span>
                                    <br />
                                     <?php $mostrarArtesPlasticas = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarArtesPlasticas')) ?>
                                    <br />
                                    <h2><a href=""><?php echo $mostrarArtesPlasticas['Artigo']['titulo']?></a></h2>
                                </li>
                            </ul>
                        </div>

                        <div class="publicidade-botao">
                            <p>Publicidade</p>
                            <span></span>
                            <br />
                        </div>

                        <div class="destaque-com-img" style="min-height: 200px;">
                            <span class="editoria teatro-danca">Teatro & Dança</span>
                            <ul id="materia-img" style="margin-top: 5px;">
                              <?php $mostrarTeatroDanca = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarTeatroDanca')) ?>
                                <?php foreach($mostrarTeatroDanca as $t){?>
                                <li style="width: 100px; display: inline-block; height: 110px; margin-left: -1px;"><span class="img-pequena-2"></span></li>
                                <li style="width: 200px; display: inline-block; height: 110px; margin-left: -1px;">
                                    <h4><a href=""><?php echo $t['Artigo']['titulo']?></a></h4>
                                    <p><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $this->Text->truncate($destaque['Artigo']['texto'], 120)?></a></p>
                                </li>
                                <?php } ?>


                            </ul>

                        </div>


                    </li> <!-- Esquerda -->


                    <li  style="width: 320px; margin-left: 12px; position: absolute; left: 322px;top: 15px">
                        <?php $destaqueSemFoto = $this->requestAction(array('controller'=>'artigos', 'action'=>'destaqueSemFoto'))?>

                        <div class="destaque-sem-img">
                            <span class="editoria <?php echo Inflector::slug($destaqueSemFoto['Editoria']['nomeEditoria'])?>"><a href=""><?php echo $destaqueSemFoto['Editoria']['nomeEditoria']?></a></span>
                            <br />
                            <br />
                            <h1><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $destaqueSemFoto['Artigo']['id'], Inflector::slug($destaqueSemFoto['Artigo']['titulo'])))?>"><?php echo $destaqueSemFoto['Artigo']['titulo']?></a></h1>
                            <p><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $destaqueSemFoto['Artigo']['id'], Inflector::slug($destaqueSemFoto['Artigo']['titulo'])))?>"><?php echo $this->Text->truncate($destaqueSemFoto['Artigo']['texto'], 120)?></a></p>
                            <br />
                        </div>

                        <div class="destaque-lista">
                            <span class="editoria livros"><a href="">Livros</a></span>
                            <br />
                            <ul id="materias-lista" >
                                <?php $listarLivros = $this->requestAction(array('controller'=>'artigos', 'action'=>'listarLivros'))?>
                                <?php foreach($listarLivros as $l){?>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $l['Artigo']['id'], Inflector::slug($l['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $l['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 110px;"><span class="img-pequena"></span></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria teatro-danca">Teatro & Dança</span>
                                    <?php $mostrarTeatroDancaComImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarTeatroDancaComImg'))?>
                                    <br />
                                    <br />
                                    <h2><a href=""><?php echo $mostrarTeatroDancaComImg['Artigo']['titulo']?></a></h2>
                                </li>
                            </ul>
                        </div>

                         <div class="destaque-sem-img">
                            <div id="img-dupla"></div>
                            <br />
                            <span class="editoria cinema">Cinema</span>
                            <br />
                            <br />
                             <?php $mostrarCinemaImgDupla = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarCinemaImgDupla'))?>
                            <h1><a href=""><?php echo $mostrarCinemaImgDupla['Artigo']['titulo']?></a></h1>
                            <p><a href=""><?php echo $mostrarCinemaImgDupla['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                         <div class="destaque-lista">
                            <span class="editoria musica">Música</span>
                            <br />
                            <ul id="materias-lista" >
                                <?php //$musicas = $this->requestAction(array('controller'=>'artigos', 'action'=>'listaMusica'))?>
                                <?php ///foreach($musicas as $m){?>
                                <li><a href="<?php //echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $m['Artigo']['id'], Inflector::slug($m['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php //echo $m['Artigo']['titulo']?></a></li>
                                <?php //} ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque">
                            <span class="editoria musica">Música</span>
                            <br />
                            <br />
                            <h3>Titulo da máteria</h3>
                            <p>começo da máteria vem aqui e tem limite de caracteres</p>
                            <br />
                        </div>

                         <div class="destaque-com-img" style="min-height: 200px;">
                            <span class="editoria livros">Livros</span>
                            <ul id="materia-img" style="margin-top: 5px;">

                                <li style="width: 100px; display: inline-block; height: 110px; margin-left: -1px;"><span class="img-pequena-2"></span></li>
                                <li style="width: 200px; display: inline-block; height: 110px; margin-left: -1px;">
                                    <h4>Titulo da máteria</h4>
                                    <p>começo da máteria vem aqui e tem limite de caracteres</p>
                                </li>

                                <li style="width: 100px; display: inline-block; height: 110px; margin-left: -1px; margin-top: -20px;"><span class="img-pequena-2"></span></li>
                                <li style="width: 200px; display: inline-block; height: 110px; margin-left: -1px; margin-top: -20px;">
                                    <h4>Titulo da máteria</h4>
                                    <p>começo da máteria vem aqui e tem limite de caracteres</p>
                                </li>

                            </ul>

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

                    </li><!-- Centro -->