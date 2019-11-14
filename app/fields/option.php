<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo')
        ->addImage('logo-white')
    ->addTab('Social media', ['label' => 'Social Media', 'placement' => 'left'])
        ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
            ->addText('icon', ['title' => 'Font awesome kod ikonki'])
            ->addText('link', ['title' => 'link'])
        ->endRepeater()
    ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
        ->addTextarea('hero_slogan', ['label'=>'Tytuł', 'new_lines'=>'br'])
        ->addLink('hero_link', ['label'=>'Link'])
        ->addGallery('hero')
    ->addTab('LokalizacjaMenu', ['label'=>'Lokalizacja Menu', 'placement' => 'left'])
        ->addRepeater('loc_nav')
             ->addSelect('name', ['label'=>'Katogria'])
			->addChoice('Sklepy')
			->addChoice('Urzędy')
			->addChoice('Gastronomia')
			->addChoice('Rozrywka')
			->addChoice('Lotnisko')
			->addChoice('Park')
			->addChoice('Miasto')
             ->addImage('icon', ['Label'=>'Ikona', 'wrapper' => array ('width' => '25%')])
         ->endRepeater()
    ->addTab('info-section', ['label' => 'Sekcja informacyjna', 'placement' => 'left'])
        ->addText('info-section_title', ['label' => 'Nagłówek', 'new_lines'=>'br'])
        ->addText('info-section_subtitle', ['label' => 'Nagłówek', 'new_lines'=>'br'])
        ->addTextarea('info-section_content', ['label' => 'Treść', 'new_lines'=>'br'])
        ->addLink('info-section_link', ['label'=>'link'])
        ->addImage('info-section_image', ['title'=> 'Zdjęcie w tle'])
        ->addRepeater('icon-boxs', ['label'=>'Boxy z ikonką','min' => 0, 'layout' => 'table'])
            ->addImage('img', ['title'=> 'Zdjęcie'])
            ->addTextarea('title', ['title' => 'Nagłówek', 'new_lines'=>'br'])
            ->addTextarea('subtitle', ['title' => 'Podtytuł', 'new_lines'=>'br'])
            ->addTextarea('content', ['title' => 'Treść'])
        ->endRepeater()
    ->addTab('footer', ['label' => 'Stopka', 'placement' => 'left'])
        ->addImage('footer_image', ['label'=>'Zdjęcie w tle'])
    ->addTab('Formularz kontaktowy', ['placement' => 'left'])
        ->addTextarea('form_title', ['label' => 'Tytuł sekcji', 'rows'=>2,'new_lines'=>'br'])
        ->addLink('form_link', ['label' => 'Link'])
        ->addImage('form_image', ['label' => 'Zdjęcie w tle'])
        ->addText('office_title', ['label' => 'Tytuł biuro sprzedaży'])
        ->addRepeater('office_persons', ['label' => 'Osoby do kontatku'])
            ->addText('name', ['label' => 'Imię i nazwisko'])
            ->addText('tel', ['label' => 'Telefon'])
            ->addText('mail', ['label' => 'E-mail'])
        ->endRepeater()
    ->addTab('Navigacja', ['placement' => 'left'])
        ->addRepeater('navigation', ['title'=>'Navigacja'])
            ->addText('text', ['title'=>'Tekst',])
            ->addLink('link')
        ->endRepeater()
    ;




return $option_page;
