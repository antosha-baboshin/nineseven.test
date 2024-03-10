<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<article>
				<h3 class="date"><?=mb_substr($arItem["DISPLAY_ACTIVE_FROM"], 0, -4)?></h3>
				<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
			</article>
		<? endforeach; ?>
	</div>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]) :?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>

