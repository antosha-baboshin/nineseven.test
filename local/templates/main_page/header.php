<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?
use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<? if ($_SERVER["REQUEST_URI"] == '/') { ?>
    <html class="start-page">
<?php } else { ?>
    <html class="inner-page">
<? } ?>

<head>
    <? $APPLICATION->ShowHead() ?>
    <title>
        <? $APPLICATION->ShowTitle() ?>
    </title>
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-1.10.2.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.carouFredSel-6.0.4-packed.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
    Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>");
    ?>

</head>

<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>
    <div id="wrapper">
        <div class="headerBlock">
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="" /></a>
                </div>
                <div class="rightHeader">
                    <div class="info">
                        <a href="tel:+74996537995" class="numberPhone">+7(499)394 49 56</a>
                        <span>
                            <a href="#" class="facebook"><i></i><span></span></a>
                            <a href="#" class="in"><i></i><span></span></a>
                            <a href="#" class="vk"><i></i><span></span></a>
                        </span>
                        <strong>
                            <a class="activeLng" href="#"><i></i><span>Ru</span></a>
                            <a href="#"><i></i><span>EN</span></a>
                        </strong>
                    </div>
                    <div class="clear"></div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => "catalog_horizontal",
                            "MENU_THEME" => "site",	// Тема меню
                        ),
                        false
                    ); ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>