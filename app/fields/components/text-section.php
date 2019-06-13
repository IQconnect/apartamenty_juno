<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('text-section');

$builder
    ->addTrueFalse('special', ['title'=>'Specjalny nagłówek'])
    ->addText('title', ['title'=>'Tytuł'])
    ->addText('subtitle', ['title'=>'Subtitle'])
        ->conditional('special', '==', '0')
    ->addTextarea('content', ['title'=>'Content'])
    ->addLink('link', ['title'=>'Link']);
    ;
return $builder;