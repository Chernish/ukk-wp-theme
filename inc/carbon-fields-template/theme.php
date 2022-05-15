<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

Container::make('theme_options', __('Настройки темы'))
    ->add_tab(__('Основные настройки'), array(
        Field::make('text', 'site_logo_title_small', __('Логотип маленькая надпись'))
            ->set_width(50),
        Field::make('text', 'site_logo_title_big', __('Логотип большая надпись'))
            ->set_width(50),
        Field::make('text', 'site_address', __('Адрес'))
            ->set_width(20),
        Field::make('text', 'site_email', __('Почта'))
            ->set_width(20),
        Field::make('text', 'site_phone', __('Номер телефона'))
            ->set_width(20),
        Field::make('text', 'site_phone_secretary', __('Номер телефона секретаря'))
            ->set_width(20),
        Field::make('text', 'site_phone_vice', __('Номер телефона заместителя'))
            ->set_width(20),
        Field::make('text', 'site_phone_preparation', __('Номер телефона отдела подготовки'))
            ->set_width(20),
        Field::make('text', 'site_phone_accounting', __('Номер телефона бухгалтерии'))
            ->set_width(20),
        Field::make('textarea', 'site_map', __('Карта'))
            ->set_rows(4)
    ));