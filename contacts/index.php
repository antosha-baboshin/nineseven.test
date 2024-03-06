<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="center">
	<h1>VK Consulting Group</h1>
	<p class="short-line">
	</p>
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
 <section><img src="/local/templates/main_page/img/ico/ico_07.png" alt=""></section>
					</div>
					<div class="cell_wrapper text_cel">
 <section>+7 (499) 394 49 56</section>
					</div>
				</div>
			</td>
			<td>
				<div class="inform_block">
					<div class="cell_wrapper ico_cel">
 <section><img src="/local/templates/main_page/img/ico/ico_08.png" alt=""></section>
					</div>
					<div class="cell_wrapper text_cel">
 <section><a href="mailto:vkuchevskaya@gmail.com">vkuchevskaya@gmail.com</a></section>
					</div>
				</div>
			</td>
			<td>
				<div class="inform_block">
					<div class="cell_wrapper ico_cel">
 <section><img src="/local/templates/main_page/img/ico/ico_09.png" alt=""></section>
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
<?$APPLICATION->IncludeComponent(
	"nineseven_components:main.feedback",
	"contacts_feedback_form",
	Array(
		"EMAIL_TO" => "baboshin.antoha@gmail.com",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME","MESSAGE"),
		"USE_CAPTCHA" => "N",
        "AJAX_MODE" => "Y"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>