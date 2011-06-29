<?php
Class ComentariosController extends AppController{
    var $name = 'Comentarios';


    /*
     * Visualizar comentarios por ajax
     * @param id
     *
     */
    function verComentarios($id){
        $this->autoRender = false;

        $comentarios = $this->Comentario->find('all', array('conditions'=>array('Comentario.artigo_id'=>$id), 'order'=>array('Comentario.created DESC')));

        if(empty($comentarios)){
            echo '<h3>Não há comentários, seja o primeiro a comentar!</h3>';
        }else{
            foreach($comentarios as $c){
                echo '
                    <li>
                        <h5><span><a href="#" style="color: #00547a; font-weight: bold" target="_blank"> </a></span> disse:</h5>
                        <p></p>
                    </li>
                    ';
            }
        }
    }
}