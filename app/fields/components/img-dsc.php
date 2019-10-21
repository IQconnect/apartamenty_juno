<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$imgDsc = new FieldsBuilder('img-dsc');

$imgDsc
    ->addTextarea('title', ['title'=>'Tytuł', 'new_lines'=>'br'])
    ->addTextarea('content', ['title'=>'Treść'])
    ->addLink('link', ['title'=>'Link'])
    ->addImage('img', ['label'=>'Zdjęcie'])
    ;
return $imgDsc;