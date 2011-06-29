<?php
Class Colunista extends AppModel{
    var $name = 'Colunista';

    var $hasMany = array('Artigo');
}