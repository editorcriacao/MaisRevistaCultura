<?php

Class ArtigosController extends AppController {

    var $name = 'Artigos';

    /*
     * Método index
     *
     */

    function index() {

    }

    /*
     * Método para aparecer Destaque
     *
     */

    function destaque() {
        $destaque = $this->Artigo->find('first', array('conditions' => array('Artigo.destaque' => 1, 'Artigo.site' => 4), 'order' => array('Artigo.created DESC')));

        if ($this->params['requested']) {
            return $destaque;
        }
    }

    /*
     * Método para destaque sem foto
     *
     */

    function destaqueSemFoto() {
        $destaqueSemFoto = $this->Artigo->find('first', array('conditions' => array('Artigo.recente' => 1, 'Artigo.site' => 4), 'order' => array('Artigo.created DESC')));

        if ($this->params['requested']) {
            return $destaqueSemFoto;
        }
    }

    /*
     * Método para mostra materia sobre
     * musica com foto pequena
     *
     */
    function mostrarMusica() {
        $mostrarMusica = $this->Artigo->find('first', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 45, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 1));

        if ($this->params['requested']) {
            return $mostrarMusica;
        }
    }

    /*
     * Método para mostrar cinema
     * sem imagem
     *
     */

    function mostrarCinemaSemImg() {
        $mostrarCinemaSemImg = $this->Artigo->find('first', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 40, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 1));

        if ($this->params['requested']) {
            return $mostrarCinemaSemImg;
        }
    }

    /*
     * Método para listar posts de filosofia
     *
     */

    function listarFilosofia() {
        $listarFilosofia = $this->Artigo->find('all', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 46, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 2));

        if ($this->params['requested']) {
            return $listarFilosofia;
        }
    }

     /*
     * Método para mostra materia sobre
     * artes plasticas com foto pequena
     *
     */
    function mostrarArtesPlasticas() {
        $mostrarArtesPlasticas = $this->Artigo->find('first', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 42, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 1));

        if ($this->params['requested']) {
            return $mostrarArtesPlasticas;
        }
    }

    /*
     * Método para mostrar duas
     * materias sobre teatro e dança
     *
     */
    function mostrarTeatroDanca(){
        $mostrarTeatroDanca = $this->Artigo->find('all', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 41, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 2, 3));

        if ($this->params['requested']) {
            return $mostrarTeatroDanca;
        }
    }


    /* Segunda Coluna */

    /*
     * Método para listar livros
     *
     */
    function listarLivros(){
        $listarLivros = $this->Artigo->find('all', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 47, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 2));

        if ($this->params['requested']) {
            return $listarLivros;
        }
    }

    /*
     * Método para mostrar duas
     * materias sobre teatro e dança
     *
     */
    function mostrarTeatroDancaComImg(){
        $mostrarTeatroDancaComImg = $this->Artigo->find('first', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 41, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 1));

        if ($this->params['requested']) {
            return $mostrarTeatroDancaComImg;
        }
    }


    /*
     * Método para mostrar materia
     * sobre cinema com imagem dupla
     *
     */
    function mostrarCinemaImgDupla(){
        $mostrarCinemaImgDupla = $this->Artigo->find('first', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 40, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 2, 3));

        if ($this->params['requested']) {
            return $mostrarCinemaImgDupla;
        }
    }


    

}