<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("VK Consulting Group");
?>

<div id="carousel">
    <div>
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/Slide_01.jpg" alt="" width="960" height="560" />
        <div class="slideBlock">
            <h2>Команда профессиональных финансовых консультантов — мы отвечаем за качество</h2>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/line.jpg" alt="" />
            <span>Наши сотрудники имеют многолетний опыт работы в крупнейших российских и международных консалтинговых
                компаниях и банках.</span>
        </div>
    </div>
    <div>
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/Slide_02.jpg" alt="" width="960" height="560" />
        <div class="slideBlock">
            <h2>Каждый клиент уникален – мы смотрим в суть проблемы</h2>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/line.jpg" alt="" />
            <span>Мы рады каждому клиенту и предпочитаем не работать по шаблонам, а предлагаем гибкий подход к решению
                задач</span>
        </div>
    </div>
    <div>
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/Slide_03.jpg" alt="" width="960" height="560" />
        <div class="slideBlock">
            <h2>Подберем эффективное ценовое решение</h2>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/line.jpg" alt="" />
            <span>В зависимости от проекта, Вы оплачиваете полную стоимость услуги только в случае получения желаемого
                результата</span>
        </div>
    </div>
    <div>
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/Slide_04.jpg" alt="" width="960" height="560" />
        <div class="slideBlock">
            <h2>Мы поможем Вам, где бы Вы не находились</h2>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/line.jpg" alt="" />
            <span>Для наших услуг не существует границ, свяжитесь с нами и мы Вам обязательно поможем</span>
        </div>
    </div>
</div>
<div class="staticBlock">
    <div class="pagination">
        <div id="pager" class="pager"></div>
        <span class="sp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/sp.png" alt="" /></span>
        <span class="sumKol"></span>
    </div>
    <div class="blocks">
        <div id="box1" class="box">
            <p>Кто мы?</p>
            <div class="icon1"></div>
            <div class="openBlock_wrapper">
                <div class="openBlock">
                    <a href="#" class="close_open"></a>
                    <h2>Кто мы?</h2>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                    <p>VK Consulting Group — это молодая динамично развивающаяся компания, специализирующаяся на
                        предоставлении консультационных услуг в сфере корпоративных финансов, инвестиций, проектного
                        финансирования и оценки.</p>
                    <h2>Наша миссия</h2>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                    <p>повышать стоимость бизнеса наших клиентов благодаря профессиональному решению Ваших задач,
                        связанных с привлечением капитала, анализом стоимости и эффективности Вашего бизнеса, оценкой
                        активов. </p>
                    <div class="blockBottom">
                        <a href="#">Познакомиться ближе</a>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/people.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
        <div id="box2" class="box">
            <p>Что мы делаем?</p>
            <div class="icon2"></div>
            <div class="openBlock_wrapper">
                <div class="openBlock">
                    <a href="#" class="close_open"></a>
                    <h2>Что мы делаем?</h2>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                    <p>подготовка Бизнес планов и привлечение финансирования</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/bullet.png" alt="" />
                    <p>оценка эффективности проектов и финансовое моделирование бизнеса</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/bullet.png" alt="" />
                    <p>оценка для целей МСФО </p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/bullet.png" alt="" />
                    <p>и прочее</p>
                    <a href="#">Список услуг</a>
                    <h2>Для кого?</h2>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                    <p>Мы оказываем широкий спектр финансовых услуг не только отраслевым компаниям, но также Банкам и
                        консультантам. К нам обращаются компании с различными видами деятельности.</p>
                    <div class="blockBottom">
                        <a href="#">Довольные клиенты</a>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/case.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div id="box3" class="box noMargin">
            <p>Связаться с нами</p>
            <div class="icon3"></div>
            <div class="openBlock_wrapper">
                <div class="openBlock index_contact-form">
                    <a href="#" class="close_open"></a>
                    <h2>Связаться с нами</h2>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                    <p>Если у вас возникли вопросы, вы можете позвонить
                        <strong>+7 (499) 394 49 56</strong>
                        или написать нам
                        <strong>info@vkcg.ru</strong>
                    </p>

                    <form action="">
                        <p>Вы можете заполнить форму ниже и наш сотрудник свяжется с вами.</p>
                        <input type="text" value="" placeholder="Как вас зовут" />
                        <input type="text" value="" placeholder="Контактный телефон" />
                        <textarea placeholder="Тема звонка"></textarea>
                    </form>
                    <div class="require-send">
                        <h2>Спасибо!</h2>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/separate.jpg" alt="" />
                        <p>Ваш запрос на звонок отправлен.<br />В ближайшее время менеджер с вами свяжется.</p>
                        <p class="require-send_exit"><input type="button" value="Ок" /></p>
                    </div>
                    <div class="blockBottom require-call">
                        <a href="#">Заказать звонок</a>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/phone.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="pattern"></div>
<span class="sliderPrev"></span>
<span class="sliderNext"></span>

</p>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>