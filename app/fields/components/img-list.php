<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$imgDsc = new FieldsBuilder('img-dsc');

$imgDsc
    ->addImage('img', ['label'=>'Zdjęcie'])
    ->addTextarea('title', ['title'=>'Tytuł', 'new_lines'=>'br'])
    ->addSelect('direction', ['label'=>'Pozycja'])
        ->addChoice('left', ['label'=>'Lewo'])
        ->addChoice('right', ['label'=>'Prawo'])
        ->setDefaultValue('left')
    ->addRepeater('elem', ['label'=>'Element'])
        ->addTextarea('text', ['title'=>'Tytuł', 'new_lines'=>'br'])
        ->addTextarea('content', ['title'=>'Treść'])
    ;
return $imgDsc;