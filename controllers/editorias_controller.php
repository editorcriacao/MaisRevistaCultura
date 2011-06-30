<?php
Class EditoriasController extends AppController{
    var $name = 'Editorias';

    /*
     * Método para visualizar todas as materias
     * da editoria
     * @param id
     *
     */
    function ver($id){
        $editoria = $this->Editoria->find('first', array('conditions'=>array('Editoria.id' => $id)));

        $this->set('title_for_layout', $editoria['Editoria']['nomeEditoria']);
        $this->set('editoria', $editoria);
        $this->set('artigos', $this->Editoria->Artigo->find('all', array('conditions'=>array('Artigo.editoria_id'=>$id), 'order'=>array('Artigo.created'=>'desc'))));
    }

}