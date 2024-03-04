<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>


<div class="center">
    <h1>Мы рады вас приветствовать</h1>
    <p class="short-line"></p>
    <p>VK Consulting Group — это молодая динамично развивающаяся компания, специализирующаяся на предоставлении
        консультационных услуг в сфере корпоративных финансов, инвестиций, проектного финансирования и анализа
        стоимости.</p>
</div>


<div class="gray-block">
    <div class="center">
        <table class="three_col">
            <tbody>
                <tr>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper text_cel">
                                <section>Наша миссия</section>
                            </div>
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_01.png" alt="" /></section>
                            </div>
                        </div>
                        <p>Наша миссия заключается в повышении стоимости бизнеса наших клиентов благодаря
                            профессиональному решению Ваших задач, связанных с привлечением капитала, анализом стоимости
                            и эффективности Вашего бизнеса, оценкой активов. Мы нацелены на долгосрочное сотрудничество
                            со своими клиентами, поэтому наш приоритет – это высокое качество работы. Мы с удовольствием
                            поможем Вам решить Вашу задачу максимально эффективно и в срок.</p>
                    </td>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper text_cel">
                                <section>Отраслевая специфика</section>
                            </div>
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_02.png" alt="" /></section>
                            </div>
                        </div>
                        <ul>
                            <li>Розничная торговля и оказание услуг населению;</li>
                            <li>Телекоммуникации, IT технологии и интернет проекты;</li>
                            <li>Индустриальное производство;</li>
                            <li>Строительство и девелоперские проекты;</li>
                            <li>Энергетика и энергоэффективные технологии;</li>
                            <li>Добыча и переработка полезных ископаемых.</li>
                        </ul>
                    </td>
                    <td>
                        <div class="inform_block">
                            <div class="cell_wrapper text_cel">
                                <section>Команда</section>
                            </div>
                            <div class="cell_wrapper ico_cel">
                                <section><img src="<?= SITE_TEMPLATE_PATH ?>/img/ico/ico_03.png" alt="" /></section>
                            </div>
                        </div>
                        <p>Наш капитал — наши сотрудники, которые вляются профессионалами в своей области, имеют
                            начительный опыт работы в крупнейших международных и российских консалтинговых компаниях и
                            банках. Перед началом работы мы обязательно направляем Вам краткое резюме ответственных
                            исполнителей по Вашему проекту, чтобы Вы имели представление об имеющемся опыте сотрудника.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>Наши клиенты</h2>
<div class="clients-slider_wrapper">
    <a href="#" class="clients-slider_left"></a>
    <a href="#" class="clients-slider_right"></a>
    <div class="clients-slider">
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_02.png" alt="" /></a>
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_01.png" alt="" /></a>
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_03.png" alt="" /></a>
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_04.png" alt="" /></a>
    </div>
</div>
<h2>Наши партнеры и аккредитации</h2>
<div class="partner-slider_wrapper">
    <a href="#" class="partner-slider_left"></a>
    <a href="#" class="partner-slider_right"></a>
    <div class="partner-slider">
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_01.png" alt="" /></a>
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_02.png" alt="" /></a>
        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/logo_01.png" alt="" /></a>
    </div>
</div>
<div class="footer-boofer"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>