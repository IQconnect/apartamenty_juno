<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$visual= new FieldsBuilder('visual');

$visual
    ->addGallery('visual', ['title'=>'Galeria'])
    ;
return $visual;
