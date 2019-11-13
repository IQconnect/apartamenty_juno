<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$visual= new FieldsBuilder('visual');

$visual
    ->addText('title')
    ->addGallery('visual', ['title'=>'Galeria'])
    ;
return $visual;
