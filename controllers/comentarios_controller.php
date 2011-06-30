<?php

Class ComentariosController extends AppController {

    var $name = 'Comentarios';


    /*
     * Visualizar comentarios por ajax
     * @param id
     *
     */

    function verComentarios($id) {
        $this->autoRender = false;

        $comentarios = $this->Comentario->find('all', array('conditions' => array('Comentario.artigo_id' => $id), 'order' => array('Comentario.created DESC')));

        if (empty($comentarios)) {
            echo '<p>Não há comentários, seja o primeiro a comentar!</p>';
        } else {
            foreach ($comentarios as $c) {
                if (!empty($c['Comentario']['sitepessoal'])) {
                    echo '
                    <li>
                        <h5><span><a href="' . $c['Comentario']['sitepessoal'] . '" style="color: #00547a; font-weight: bold" target="_blank"> ' . $c['Comentario']['nome'] . '</a></span> disse:</h5>
                        <p>' . $c['Comentario']['comentario'] . '</p>
                    </li>
                    <div id="linha-divisao" style="margin-top: 8px;"></div>
                    ';
                } else {
                    echo '
                    <li>
                        <h5><span>' . $c['Comentario']['nome'] . '</span> disse:</h5>
                        <p>' . $c['Comentario']['comentario'] . '</p>
                    </li>
                    <div id="linha-divisao" style="margin-top: 8px;"></div>
                    ';
                }
            }
        }
    }

    /*
     * Adicionar comentarios
     *
     */

    function adicionar() {
        $this->autoRender = false;

        if (!empty($this->data)) {

            if ($this->Comentario->save($this->data)) {
                 $this->Session->setFlash('Seu comentário foi adicionado com sucesso!', 'msg-sucess');
                 $this->redirect(array('controller'=>'artigos', 'action'=>'ver', $this->data['Comentario']['artigo_id']));
            } else {
                $this->Session->setFlash('Seu comentário não foi adicionado com sucesso!', 'msg-erro');
                 $this->redirect(array('controller'=>'artigos', 'action'=>'ver', $this->data['Comentario']['artigo_id']));
            }
        }
    }

}