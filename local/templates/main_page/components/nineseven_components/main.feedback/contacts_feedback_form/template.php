<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if ($arResult["OK_MESSAGE"] <> '') {
        ?>
        <div class="mf-ok-text">
            <?= $arResult["OK_MESSAGE"] ?>
        </div>
        <?
    }
    ?>
</div>

<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
    <?= bitrix_sessid_post() ?>
    <section>
        <p>Я хочу получить ответ</p>
        <p><input type="radio" checked="checked" name="answer" value="phone" id="phone_radio"
                onChange="Selected(this)" /><label for="phone_radio">по телефону</label></p>
        <p><input type="radio" name="answer" value="mail" id="mail_radio" onChange="Selected(this)" /><label
                for="mail_radio">на электронный
                ящик</label></p>

        <script>
            function Selected(a) {
                if (a.value == "phone") {
                    document.getElementById("email_block").style.display = 'none';
                    document.getElementById("phone_block").style.display = 'block';
                } else {
                    document.getElementById("phone_block").style.display = 'none';
                    document.getElementById("email_block").style.display = 'block';
                }
            }
        </script>

        <div id="phone_block"><input type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>"
                placeholder="<?= GetMessage("MFT_PHONE") ?>" /></div>
        <div id="email_block" style="display:none;"><input type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                placeholder="<?= GetMessage("MFT_EMAIL") ?>" /></div>


        <div><input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>"
                placeholder="<?= GetMessage("MFT_NAME") ?>" /></div>
    </section>
    <section>
        <div><textarea name="MESSAGE" placeholder="<?= GetMessage("MFT_MESSAGE") ?>"></textarea></div>
    </section>
    <p class="submit-form"><input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>"></p>
    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
</form>