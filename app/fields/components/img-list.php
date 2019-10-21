<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$imgList = new FieldsBuilder('img-list');

$imgList
    ->addImage('img', ['label'=>'Zdjęcie'])
    ->addTextarea('title', ['title'=>'Tytuł', 'new_lines'=>'br'])
    ->addSelect('direction', ['label'=>'Pozycja'])
        ->addChoice('left', 'Lewo')
        ->addChoice('right', 'Prawo')
        ->setDefaultValue('left')
->addRepeater('elem', ['label'=>'Element', 'max'=>3])
        ->addTextarea('content', ['title'=>'Treść'])
    ;
return $imgList;