<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('bilding');

$page
    ->setLocation('post_type', '==', 'budynki');
  
$page
    ->addText('subtitle', ['label'=>'Typ budynku'])
    ->addImage('img', ['label'=>'Zdjęcie w tle'])
    ->addRepeater('flats', ['title'=>'Mieszkania'])
        ->addText('area', ['label'=> 'Powierzchnia'])
        ->addText('tarace', ['label'=> 'Taras / balkon'])
        ->addNumber('floor', ['label'=> 'Piętro'])
        ->addSelect('status', ['label'=> 'Status'])
            ->addChoice('wolne')
            ->addChoice('zajęte')
            ->addChoice('sprzedane')
        ->addText('price', ['label'=> 'Cena'])
        ->addFile('plan', ['label'=> 'Plan']);
    ;
return $page;