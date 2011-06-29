<li id="largura_texto" style="height: 30px; float:left;">
    <br />
    <?php
    switch ($editoria['Editoria']['id']) {
        case 39:
            echo '<span class="editoria-2 destaque-cor">DESTAQUES</span>';
            break;
        case 40:
            echo '<span class="editoria-2 cinema">Cinema</span>';
            break;
        case 41:
            echo '<span class="editoria-2 teatro-danca">Teatro & Dança</span>';
            break;
        case 42:
            echo '<span class="editoria-2 artes-plasticas">Artes Plásticas</span>';
            break;
        case 45:
            echo '<span class="editoria-2 musica">Música</span>';
            break;
        case 46:
            echo '<span class="editoria-2 filosofia">Filosofia</span>';
            break;
        case 47:
            echo '<span class="editoria-2 livros">Livros</span>';
            break;
    }
    ?>
    <div id="traco"></div>
</li>

<ul style="width: 675px; min-height: 1200px; float:left; position: absolute;" id="land-page">
    <br />
<br />
<br />
<br />
    <?php foreach ($artigos as $a) {?>
   
        <li style="position: relative">
            <div class="destaque-com-img" style="border-bottom: 0; width: 320px;">
                <ul id="materia-img" style="border-bottom: 1px solid #999; height: 90px">
                    <li style="width: 150px; display: inline-block; height: 80px;"><a href="<?php echo $this->Html->url(array('controller' => 'artigos', 'action' => 'ver', $a['Artigo']['id'], Inflector::slug($a['Artigo']['titulo']))) ?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/img/fotos_artigos/' . $a['Artigo']['foto'], array('width' => 140)) ?></a></li>
                    <li style="width: 155px; display: inline-block; height: 80px;">
                        <h3><a href="<?php echo $this->Html->url(array('controller' => 'artigos', 'action' => 'ver', $a['Artigo']['id'], Inflector::slug($a['Artigo']['titulo']))) ?>"><?php echo $a['Artigo']['titulo'] ?></a></h3>
                    </li>
                </ul>
            </div>
        </li>

<?php } ?>

</ul>







