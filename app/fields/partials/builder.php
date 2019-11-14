<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout('hero')
            ->addLayout(get_field_partial('components.img-dsc'))
            ->addLayout(get_field_partial('components.slogan'))
            ->addLayout(get_field_partial('components.img-list'))
            ->addLayout(get_field_partial('components.text-section'))
            ->addLayout(get_field_partial('components.full-img'))
            ->addLayout(get_field_partial('components.icon-section'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.gallery_feed'))
            ->addLayout('info-section')
            ->addLayout('contact')
            ->addLayout('bildings')
            ->addLayout('content')
            ->addLayout('contact-form')
            ->addLayout(get_field_partial('components.small-hero'))
            ->addLayout(get_field_partial('components.stats'))
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.extra-menu'))
            ->addLayout(get_field_partial('components.list'))
            ->addLayout(get_field_partial('components.diary'))
            ->addLayout(get_field_partial('components.titleicon'))
            ->addLayout(get_field_partial('components.visual'))
            ->addLayout(get_field_partial('components.textcontent'))
            ->addLayout(get_field_partial('components.navigation'))
            ->addLayout(get_field_partial('components.map'))
            ;
return $builder;
