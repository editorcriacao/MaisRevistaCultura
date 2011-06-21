<?php
Class Artigo extends AppModel{
    var $name = 'Artigo';

    var $belongsTo = array('Editoria');
}