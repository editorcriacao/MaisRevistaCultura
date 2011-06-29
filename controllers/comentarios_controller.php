<?php
Class ComentariosController extends AppController{
    var $name = 'Comentarios';


    /*
     * Visualizar comentarios por ajax
     * @param id
     *
     */
    function verComentarios($id){
        $comentarios = $this->Comentario->find('all', array('conditions'=>array('')));
    }
}