<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout('hero') 
            ->addLayout(get_field_partial('components.text-section'))
            ->addLayout(get_field_partial('components.full-img'))
            ->addLayout(get_field_partial('components.icon-section'))
            ->addLayout('info-section');
return $builder;