<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$slogan = new FieldsBuilder('slogan');

$slogan
    ->addTextarea('slogan', ['title'=>'Tytuł', 'new_lines'=>'br'])
    ->addText('sign', ['title'=>'Podpis'])
    ;
return $slogan;