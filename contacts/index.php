<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="center">
    <h1>VK Consulting Group</h1>
    <p class="short-line"></p>
</div>


<div class="gray-block">
    <div class="center">
        <h2>ООО «ВИКЕЙ Консалтинг Груп»</h2>
        <table class="three_col">
            <tbody>
                <tr>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_07.png" alt="" /></section>
                            </div>
                            <div class="cell_wrapper text_cel">
                                <section>+7 (499) 394 49 56</section>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_08.png" alt="" /></section>
                            </div>
                            <div class="cell_wrapper text_cel">
                                <section>vkuchevskaya@gmail.com</section>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_09.png" alt="" /></section>
                            </div>
                            <div class="cell_wrapper text_cel">
                                <section>Москва, ул. Большая Черемушкинская, 21</section>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<h2>Возникли вопросы?</h2>
<form action="">
    <section>
        <p>Я хочу получить ответ</p>
        <p><input type="radio" checked="checked" name="answer" value="phone" id="phone_radio" /><label
                for="phone_radio">по телефону</label></p>
        <p><input type="radio" name="answer" value="mail" id="mail_radio" /><label for="mail_radio">на электронный
                ящик</label></p>
        <div><input type="text" value="" placeholder="Введите номер телефона" /></div>
        <div><input type="text" value="" placeholder="Как вас зовут" /></div>
    </section>
    <section>
        <div><textarea placeholder="Сообщение"></textarea></div>
    </section>
    <p class="submit-form"><input type="button" value="Отправить" /></p>
</form>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>