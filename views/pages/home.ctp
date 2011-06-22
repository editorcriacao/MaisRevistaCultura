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

                         <div class="destaque-com-img" style="min-height: 200px;">
                            <span class="editoria livros">Livros</span>
                            <ul id="materia-img" style="margin-top: 5px;">
                                
                             <?php $mostrarLivrosListaImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarLivrosListaImg'))?>
                                <?php foreach($mostrarLivrosListaImg as $ll){?>
                                 <li style="width: 100px; display: inline-block; height: 85px; margin-left: -1px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $ll['Artigo']['id'], Inflector::slug($ll['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$ll['Artigo']['foto'], array('width'=>90))?></a></li>
                                 <li style="width: 200px; display: inline-block; height: 85px; margin-left: -1px;">
                                    <h4><a href=""><?php echo $ll['Artigo']['titulo']?></a></h4>
                                 </li>
                                <?php } ?>


                            </ul>

                        </div>


                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                 <?php $mostrarTeatroDancaComImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarTeatroDancaComImg'))?>
                                <li style="width: 150px; display: inline-block; height: 110px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $mostrarTeatroDancaComImg['Artigo']['id'], Inflector::slug($mostrarTeatroDancaComImg['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarTeatroDancaComImg['Artigo']['foto'], array('width'=>140))?></a></li>
                                <li style="width: 150px; display: inline-block; height: 110px;">
                                    <span class="editoria teatro-danca">Teatro & Dança</span>
                                    <br />
                                    <br />
                                    <h3 style="margin-top: -5px"><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $mostrarTeatroDancaComImg['Artigo']['id'], Inflector::slug($mostrarTeatroDancaComImg['Artigo']['titulo'])))?>"><?php echo $mostrarTeatroDancaComImg['Artigo']['titulo']?></a></h3>
                                </li>
                            </ul>
                        </div>

                         <div class="destaque-sem-img">
                            <?php $mostrarCinemaImgDupla = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarCinemaImgDupla'))?>
                            <div id="img-dupla"><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $mostrarCinemaImgDupla[0]['Artigo']['id'], Inflector::slug($mostrarCinemaImgDupla[0]['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarCinemaImgDupla[0]['Artigo']['foto'], array('width'=>315, 'height'=>115))?></a></div>
                            <br />
                            <span class="editoria cinema">Cinema</span>
                            <br />
                            <br />
                            <h1><a href=""><?php echo $mostrarCinemaImgDupla[0]['Artigo']['titulo']?></a></h1>
                            <p><a href=""><?php echo $mostrarCinemaImgDupla[0]['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                         <div class="destaque-lista">
                            <span class="editoria teatro-danca">Teatro & Dança</span>
                            <br />
                            <ul id="materias-lista" >
                                <?php $listaTeatroDanca = $this->requestAction(array('controller'=>'artigos', 'action'=>'listaTeatroDanca'))?>
                                <?php foreach($listaTeatroDanca as $ta){?>

                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $ta['Artigo']['id'], Inflector::slug($ta['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $ta['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque">
                            <span class="editoria artes-plasticas">Artes Plásticas</span>
                            <br />
                            <?php $mostrarArtesPlasticaSemImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarArtesPlasticaSemImg'))?>
                            <br />
                            <?php if(!empty($mostrarArtesPlasticaSemImg)){?>
                            <h3><a href=""><?php echo $mostrarArtesPlasticaSemImg['Artigo']['titulo']?></a></h3>
                            <p><a href=""><?php echo $mostrarArtesPlasticaSemImg['Artigo']['subTitulo']?></a></p>
                            <?php } ?>
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
                                    <span class="editoria filosofia">Filosofia</span>
                                    <br />
                                    <?php $mostrarFilosofiaImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarFilosofiaImg'))?>
                                    <br />
                                    <?php if(!empty($mostrarFilosofiaImg)){?>
                                    <h2><a href=""><?php echo $mostrarFilosofiaImg['Artigo']['titulo']?></a></h2>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>

                    </li><!-- Centro -->