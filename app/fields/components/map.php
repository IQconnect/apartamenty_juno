<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$map = new FieldsBuilder('map');

$map
	->addText('lat', ['wrapper' => array ('width' => '33%')])
	->addText('lng', ['wrapper' => array ('width' => '33%')])
	->addNumber('zoom', ['wrapper' => array ('width' => '33%'), 'default_value' => '13'])
	->addImage('img_active', ['label'=> 'Pin aktywny', 'wrapper' => array ('width' => '50%')])
	->addRepeater('localization')
		->addText('name', ['label'=>'Title'])
		->addText('lat', ['label'=>'LAT'])
		->addText('lng', ['label'=>'LNG'])
		->addSelect('cat', ['label'=>'Katogria'])
			->addChoice('Sklepy')
			->addChoice('Urzędy')
			->addChoice('Gastronomia')
			->addChoice('Rozrywka')
			->addChoice('Lotnisko')
			->addChoice('Park')
			->addChoice('Miasto')

    ;
return $map;
