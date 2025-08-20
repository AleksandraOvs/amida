<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'site_carbon');
function site_carbon()
{

    Container::make('theme_options', 'Contacts')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-megaphone')
        ->add_tab(__('Контакты'), array(

            Field::make('complex', 'crb_contacts', 'Контакты')

                ->add_fields(array(
                    Field::make('image', 'crb_contact_image', 'Иконка')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_name', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_link', 'Ссылка')
                        ->set_width(33),
                )),

            Field::make('complex', 'crb_socials', 'Соцсети')

                ->add_fields(array(
                    Field::make('image', 'crb_social_image', 'Иконка')
                        ->set_width(33),
                    Field::make('text', 'crb_social_name', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_social_link', 'Ссылка')
                        ->set_width(33),
                )),
        ));

    /*POST META*/

    Container::make('post_meta', 'Main page content')
        ->show_on_page(get_option('page_on_front'))

        ->add_tab(__('Первый экран'), array(

            Field::make('complex', 'crb_hero_slides', 'Слайды первого экрана')
                ->add_fields(array(
                    // Field::make("checkbox", "crb_darker_pic", "Включить затемнение слайда")
                    //     ->set_option_value('yes'),
                    Field::make('image', 'crb_hero_img', 'Hero Picture')
                        ->set_width(50),
                    Field::make('image', 'crb_hero_img_mob', 'Hero Picture (mobile)')
                        ->set_width(50),
                    Field::make('rich_text', 'crb_hero_content_heading', 'Heading#1')
                        ->set_width(50),
                    Field::make('rich_text', 'crb_hero_content_desc', 'Hero description')
                        ->set_width(50),
                    Field::make('text', 'crb_hero_content_link', 'Ссылка')
                        ->set_width(50),
                    Field::make('text', 'crb_hero_content_link_text', 'Текст ссылки')
                        ->set_width(50),
                )),
        ));

    Container::make('post_meta', 'Настройки проекта')
        ->where('post_term', '=', [
            'field'    => 'slug',      // сравниваем по слагу термина
            'value'    => 'projects',  // ваш slug категории
            'taxonomy' => 'category',  // таксономия
        ])
        ->add_fields([
            Field::make('text', 'crb_project_link', 'Ссылка')
                ->set_help_text('Укажите URL для переходна страницу')
                ->set_width(50),
            Field::make('textarea', 'crb_project_video_iframe', __('Видео iframe', 'crb'))
                ->set_help_text('Вставьте код iframe с YouTube, Vimeo или другого источника для открытия во всплывающем окне.')
                ->set_width(50),

            Field::make('text', 'crb_project_link_text', 'Текст ссылки')
                ->set_default_value('Открыть проект')
                ->set_help_text('Текст кнопки/ссылки в выводе'),

        ]);

    Container::make('post_meta', 'Доп. поля для новости')
        ->where('post_term', '=', [
            'field'    => 'slug',      // сравниваем по слагу термина
            'value'    => 'news',  // ваш slug категории
            'taxonomy' => 'category',  // таксономия
        ])
        ->add_fields([
            Field::make('text', 'crb_news_link', 'Ссылка')
                ->set_help_text('Укажите URL для переходна страницу')
                ->set_width(50),

            Field::make('text', 'crb_news_link_text', 'Текст ссылки')
                ->set_width(50)
                ->set_help_text('Текст кнопки/ссылки в выводе'),

        ]);
}
