<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="gray-block">
	<div class="center">
		<article class="article_open">
			<h3 class="date">
				<?= mb_substr($arResult["DISPLAY_ACTIVE_FROM"], 0, -4); ?>
			</h3>
			<h3>
				<?= $arResult["NAME"]; ?>
			</h3>
			<?= $arResult["DETAIL_TEXT"]; ?>
			<div class="article_meta">
				<div class="soc_share">Поделиться с друзьями: <img src="<?= SITE_TEMPLATE_PATH ?>/img/socials.png" alt="" /></div>
				<a href="#" class="back_button">К списку новостей</a>
				<a href="#" class="download_ico">Скачать файл</a>
			</div>
		</article>
	</div>
</div>