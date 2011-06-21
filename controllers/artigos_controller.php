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

    function mostrarTeatroDanca() {
        $mostrarTeatroDanca = $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo, Artigo.foto
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 41
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 2');

        if ($this->params['requested']) {
            return $mostrarTeatroDanca;
        }
    }

    /* Segunda Coluna */

    /*
     * Método para listar livros
     *
     */

    function listarLivros() {
        $listarLivros =  $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo, Artigo.id
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 47
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 2');

        if ($this->params['requested']) {
            return $listarLivros;
        }
    }

    /*
     * Método para mostrar duas
     * materias sobre teatro e dança
     *
     */

    function mostrarTeatroDancaComImg() {
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

    function mostrarCinemaImgDupla() {
        $mostrarCinemaImgDupla = $this->Artigo->query('SELECT Artigo.id, Artigo.titulo, Artigo.subTitulo, Artigo.foto
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 40
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 1');

        if ($this->params['requested']) {
            return $mostrarCinemaImgDupla;
        }
    }

    /*
     * Método para trazer uma lista
     * de artigos sobre teatro e artes plasticas
     *
     */

    function listaTeatroDanca() {
        $listaTeatroDanca = $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 41
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 1');

        if ($this->params['requested']) {
            return $listaTeatroDanca;
        }
    }

    /*
     * Método para trazer
     * uma materia sobre artes plasticas
     * sem imagem
     */
    function mostrarArtesPlasticaSemImg() {
        $mostrarArtesPlasticaSemImg = $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 42
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 1');

        if ($this->params['requested']) {
            return $mostrarArtesPlasticaSemImg;
        }
    }

     /*
     * Método para trazer
     * uma materia sobre artes plasticas
     * sem imagem
     */
    function mostrarLivrosListaImg() {
        $mostrarLivrosListaImg = $this->Artigo->find('all', array('conditions' => array('Artigo.site' => 4, 'Artigo.editoria_id' => 47, 'Artigo.destaque != 1', 'Artigo.recente != 1'), 'order' => array('Artigo.created DESC'), 'limit' => 2));

        if ($this->params['requested']) {
            return $mostrarLivrosListaImg;
        }
    }

     /*
     * Método para trazer
     * uma materia sobre filofosia
     * com imagem
     */
    function mostrarFilosofiaImg() {
        $mostrarFilosofiaImg = $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 46
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 2, 2');

        if ($this->params['requested']) {
            return $mostrarFilosofiaImg;
        }
    }

    /*
     * Método para trazer matérias destaques que
     * ficam na terceira coluna
     *
     */
     function destaquesLista(){
         $destaquesLista = $this->Artigo->query('SELECT Artigo.titulo, Artigo.subTitulo
                                                            FROM  `artigos` AS Artigo
                                                            WHERE Artigo.site = 4
                                                            AND Artigo.editoria_id = 46
                                                            AND Artigo.destaque != 1
                                                            AND Artigo.recente != 1
                                                            ORDER By Artigo.created DESC
                                                        LIMIT 1, 4');

        if ($this->params['requested']) {
            return $destaquesLista;
        }
     }

}