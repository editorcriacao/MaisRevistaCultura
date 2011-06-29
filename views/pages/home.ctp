
                  <li style="width: 320px; min-height: 1200px; position: relative; top: -135px;">

                       <?php $destaque = $this->requestAction(array('controller'=>'artigos', 'action'=>'destaque'))?>
                         <div class="destaque">
                            <div class="img"></div>
                            <span class="editoria <?php echo Inflector::slug($destaque['Editoria']['nomeEditoria'])?>"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $destaque['Editoria']['nomeEditoria']?></a></span>
                            <br />
                            <h3 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $destaque['Artigo']['titulo']?></a></h3>
                            <p style="margin-top: 8px; line-height: 100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaque['Artigo']['id'], Inflector::slug($destaque['Artigo']['titulo'])))?>"><?php echo $this->Text->truncate($destaque['Artigo']['subTitulo'], 120)?></a></p>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                             <?php $mostrarMusica = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarMusica'))?>
                            <ul id="materia-img">
                                <li style="width: 150px; display: inline-block; height: 65px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarMusica['Artigo']['id'], Inflector::slug($mostrarMusica['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarMusica['Artigo']['foto'], array('width'=>140))?></a></li>
                                <li style="width: 165px; display: inline-block; height: 65px;">
                                    <span class="editoria musica"><a href="">Música</a></span>
                                    <br />
                                    <h2 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarMusica['Artigo']['id'], Inflector::slug($mostrarMusica['Artigo']['titulo'])))?>"><?php echo $mostrarMusica['Artigo']['titulo']?></a></h2>
                                </li>
                            </ul>
                        </div>

                        <div class="destaque">
                            <span class="editoria cinema">Cinema</span>
                            <br />
                            <?php $mostrarCinemaSemImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarCinemaSemImg')) ?>
                            <h3 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaSemImg['Artigo']['id'], Inflector::slug($mostrarCinemaSemImg['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaSemImg['Artigo']['titulo']?></a></h3>
                            <p style="margin-top: 8px; line-height: 100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaSemImg['Artigo']['id'], Inflector::slug($mostrarCinemaSemImg['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaSemImg['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                        <div class="destaque-lista">
                            <span class="editoria filosofia">Filosofia</span>
                            <br />
                                <ul id="materias-lista" style="margin-top:8px;">
                                <?php $listarFilosofia = $this->requestAction(array('controller'=>'artigos', 'action'=>'listarFilosofia')) ?>
                                <?php foreach($listarFilosofia as $f){?>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $f['Artigo']['id'], Inflector::slug($f['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $f['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                 <?php $mostrarArtesPlasticas = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarArtesPlasticas')) ?>
                                <li style="width: 150px; display: inline-block; height: 65px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarArtesPlasticas['Artigo']['id'], Inflector::slug($mostrarArtesPlasticas['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarArtesPlasticas['Artigo']['foto'], array('width'=>140))?></a></li>
                                <li style="width: 165px; display: inline-block; height: 65px;">
                                    <span class="editoria artes-plasticas">Artes Plásticas</span>
                                    <br />
                                    <h2 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarArtesPlasticas['Artigo']['id'], Inflector::slug($mostrarArtesPlasticas['Artigo']['titulo'])))?>"><?php echo $mostrarArtesPlasticas['Artigo']['titulo']?></a></h2>
                                </li>
                            </ul>
                        </div>

                        <div class="publicidade-botao">
                            <p>Publicidade</p>
                            <span></span>
                            <br />
                        </div>

                        <div class="destaque-com-img" style="min-height: 180px;">
                            <span class="editoria teatro-danca">Teatro & Dança</span>
                            <ul id="materia-img" style="margin-top: 10px;">
                              <?php $mostrarTeatroDanca = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarTeatroDanca')) ?>
                                <?php foreach($mostrarTeatroDanca as $t){?>
                                <li style="width: 100px; display: inline-block; height: 65px; margin-left: 0;">
                                    <a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $t['Artigo']['id'], Inflector::slug($t['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$t['Artigo']['foto'], array('width'=>90))?></a>
                                </li>
                                <li style="width: 200px; display: inline-block; height: 65px; margin-left: 0;">
                                    <h4><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $t['Artigo']['id'], Inflector::slug($t['Artigo']['titulo'])))?>"><?php echo $t['Artigo']['titulo']?></a></h4>
                                </li>
                                <?php } ?>
                            </ul>

                        </div>


                    </li> <!-- Esquerda -->



                    <li  style="width: 320px; min-height: 1200px; margin-left: 12px; position: relative; top: -3px">

                        <?php $destaqueSemFoto = $this->requestAction(array('controller'=>'artigos', 'action'=>'destaqueSemFoto'))?>

                        <div class="destaque-sem-img">
                            <span class="editoria <?php echo Inflector::slug($destaqueSemFoto['Editoria']['nomeEditoria'])?>"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaqueSemFoto['Artigo']['id'], Inflector::slug($destaqueSemFoto['Artigo']['titulo'])))?>"><?php echo $destaqueSemFoto['Editoria']['nomeEditoria']?></a></span>
                            <br />
                            
                            <h1 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaqueSemFoto['Artigo']['id'], Inflector::slug($destaqueSemFoto['Artigo']['titulo'])))?>"><?php echo $destaqueSemFoto['Artigo']['titulo']?></a></h1>
                            <p style="margin-top: 8px; line-height: 100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $destaqueSemFoto['Artigo']['id'], Inflector::slug($destaqueSemFoto['Artigo']['titulo'])))?>"><?php echo $destaqueSemFoto['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                         <div class="destaque-com-img" style="min-height: 180px;">
                            <span class="editoria livros">Livros</span>
                            <ul id="materia-img" style="margin-top: 10px;">
                                
                             <?php $mostrarLivrosListaImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarLivrosListaImg'))?>
                                <?php foreach($mostrarLivrosListaImg as $ll){?>
                                 <li style="width: 100px; display: inline-block; height: 65px; margin-left: -1px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $ll['Artigo']['id'], Inflector::slug($ll['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$ll['Artigo']['foto'], array('width'=>90))?></a></li>
                                 <li style="width: 200px; display: inline-block; height: 65px; margin-left: -1px;">
                                    <h4><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $ll['Artigo']['id'], Inflector::slug($ll['Artigo']['titulo'])))?>"><?php echo $ll['Artigo']['titulo']?></a></h4>
                                 </li>
                                <?php } ?>


                            </ul>

                        </div>


                        <div class="destaque-com-img" style="min-height: 120px;">
                            <ul id="materia-img">
                                 <?php $mostrarTeatroDancaComImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarTeatroDancaComImg'))?>
                                <li style="width: 150px; display: inline-block; height: 65px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigo', 'action'=>'ver', $mostrarTeatroDancaComImg['Artigo']['id'], Inflector::slug($mostrarTeatroDancaComImg['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarTeatroDancaComImg['Artigo']['foto'], array('width'=>140))?></a></li>
                                <li style="width: 165px; display: inline-block; height: 65px;">
                                    <span class="editoria teatro-danca">Teatro & Dança</span>
                                    <br />
                                    <h3 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarTeatroDancaComImg['Artigo']['id'], Inflector::slug($mostrarTeatroDancaComImg['Artigo']['titulo'])))?>"><?php echo $mostrarTeatroDancaComImg['Artigo']['titulo']?></a></h3>
                                    <br />
                                    </li>
                                <br />
                            </ul>
                        </div>

                         <div class="destaque-sem-img">
                            <?php $mostrarCinemaImgDupla = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarCinemaImgDupla'))?>
                            <div id="img-dupla"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaImgDupla[0]['Artigo']['id'], Inflector::slug($mostrarCinemaImgDupla[0]['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/img-materia/'.$mostrarCinemaImgDupla[0]['Artigo']['imagemMateria'], array('width'=>315))?></a></div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <span class="editoria cinema">Cinema</span>
                            <br />
                            <h1 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaImgDupla[0]['Artigo']['id'], Inflector::slug($mostrarCinemaImgDupla[0]['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaImgDupla[0]['Artigo']['titulo']?></a></h1>
                            <p style="margin-top: 8px; line-height: 100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarCinemaImgDupla[0]['Artigo']['id'], Inflector::slug($mostrarCinemaImgDupla[0]['Artigo']['titulo'])))?>"><?php echo $mostrarCinemaImgDupla[0]['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                         <div class="destaque-lista">
                            <span class="editoria musica">MÚSICA</span>
                            <br />
                                                    
                            <?php $mostrarMusicaSemImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarMusicaSemImg'))?>
                            <h3 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarMusicaSemImg[0]['Artigo']['id'], Inflector::slug($mostrarMusicaSemImg[0]['Artigo']['titulo'])))?>"><?php echo $mostrarMusicaSemImg[0]['Artigo']['titulo']?></a></h3>
                            <p style="margin-top: 8px; line-height:100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarMusicaSemImg[0]['Artigo']['id'], Inflector::slug($mostrarMusicaSemImg[0]['Artigo']['titulo'])))?>"><?php echo $mostrarMusicaSemImg[0]['Artigo']['subTitulo']?></a></p>
                            <br />
                        </div>

                        <div class="destaque">
                            <span class="editoria artes-plasticas">Artes Plásticas</span>
                            <br />
                            <?php $mostrarArtesPlasticaSemImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarArtesPlasticaSemImg'))?>
                            
                            <?php if(!empty($mostrarArtesPlasticaSemImg)){?>
                            <h3 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarArtesPlasticaSemImg[0]['Artigo']['id'], Inflector::slug($mostrarArtesPlasticaSemImg[0]['Artigo']['titulo'])))?>"><?php echo $mostrarArtesPlasticaSemImg[0]['Artigo']['titulo']?></a></h3>
                            <p style="margin-top: 8px; line-height: 100% !important;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarArtesPlasticaSemImg[0]['Artigo']['id'], Inflector::slug($mostrarArtesPlasticaSemImg[0]['Artigo']['titulo'])))?>"><?php echo $mostrarArtesPlasticaSemImg[0]['Artigo']['subTitulo']?></a></p>
                            <?php } ?>
                            <br />
                        </div>

                        <div class="destaque-lista">
                            <span class="editoria livros"><a href="">Livros</a></span>
                            <br />
                            <ul id="materias-lista" style="margin-top: 8px;">
                                <?php $listarLivros = $this->requestAction(array('controller'=>'artigos', 'action'=>'listarLivros'))?>
                                <?php foreach($listarLivros as $l){?>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $l['Artigo']['id'], Inflector::slug($l['Artigo']['titulo'])))?>"><?php echo $this->Html->image('disc.png', array('style' => 'margin-right: 4px;')) ?> <?php echo $l['Artigo']['titulo']?></a></li>
                                <?php } ?>
                            </ul>
                            <br />
                        </div>

                        <div class="destaque-com-img">
                            <ul id="materia-img">
                                <?php $mostrarFilosofiaImg = $this->requestAction(array('controller'=>'artigos', 'action'=>'mostrarFilosofiaImg'))?>
                                <li style="width: 150px; display: inline-block; height: 110px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarFilosofiaImg[0]['Artigo']['id'], Inflector::slug($mostrarFilosofiaImg[0]['Artigo']['titulo'])))?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/'.$mostrarFilosofiaImg[0]['Artigo']['foto'], array('width'=>140))?></a></li>
                                <li style="width: 165px; display: inline-block; height: 110px;">
                                    <span class="editoria filosofia">Filosofia</span>
                                    <br />
                                    <?php if(!empty($mostrarFilosofiaImg)){?>
                                    <h2 style="margin-top:10px;"><a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $mostrarFilosofiaImg[0]['Artigo']['id'], Inflector::slug($mostrarFilosofiaImg[0]['Artigo']['titulo'])))?>"><?php echo $mostrarFilosofiaImg[0]['Artigo']['titulo']?></a></h2>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>

                    </li><!-- Centro -->