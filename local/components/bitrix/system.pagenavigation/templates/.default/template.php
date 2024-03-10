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

if (!$arResult["NavShowAlways"]) {
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="pagination_article">
	<? if ($arResult["NavPageNomer"] > 1): ?>

		<? if ($arResult["bSavePage"]): ?>
			<a class="page_back"
				href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
				<?= GetMessage("nav_prev") ?>
			</a>
			|
		<? else: ?>
			<? if ($arResult["NavPageNomer"] > 2): ?>
				<a class="page_back"
					href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
					<?= GetMessage("nav_prev") ?>
				</a>
			<? else: ?>
				<a class="page_back" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
					<?= GetMessage("nav_prev") ?>
				</a>
			<? endif ?>
			|
		<? endif ?>

	<? else: ?>
		&nbsp;
		<?= GetMessage("nav_prev") ?>&nbsp;|
	<? endif ?>

	<? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>

		<? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
			<a class="active">
				<?= $arResult["nStartPage"] ?>
		</a>
		<? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
				<?= $arResult["nStartPage"] ?>
			</a>
		<? else: ?>
			<a
				href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>">
				<?= $arResult["nStartPage"] ?>
			</a>
		<? endif ?>
		<? $arResult["nStartPage"]++ ?>
	<? endwhile ?>
	|

	<? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
		<a class="page_next"
			href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
			<?= GetMessage("nav_next") ?>
		</a>&nbsp;
	<? else: ?>
		<?= GetMessage("nav_next") ?>&nbsp;
	<? endif ?>
</div>

<!--
 <a href="#" class="page_back">Назад</a> <a href="#" class="page_next">Вперед</a> <a href="#">1</a> <a href="#" class="active">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> <a href="#">8</a>
	... -->