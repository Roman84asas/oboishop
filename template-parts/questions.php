<?php
/**
 * Template part for questions
 *
 */

defined( 'ABSPATH' ) || exit;


?>


<div class="questions" id="questions">
	<img src="/wp-content/themes/oboishop/assets/img/man.jpg">
	<div class="questions-text">
		<h3>Остались вопросы?</h3>
		<p>
			Я - менеджер компании. Хотите уточнить детали или готовы оставить заявку?
		</p>
		<div class="questions-btns">

			<div class="quest-open-tab btn btn-transparent">Отправить сообщение</div>
			<form id="quest-open-tab2" class="quest-tab form-quest2">
				<div style="display: none;">
					<input type="text" name="fullName" value="" />
				</div>
				<div class="forms-names">
					<div class="field">
						<input type="text" class="name" name="name" placeholder="Введите ваше имя">
					</div>
					<div class="field">
						<input type="text" class="email" name="email" placeholder="Введите ваш email">
					</div>
				</div>
				<div class="field">
					<textarea name="message" placeholder="Ваше сообщение"></textarea>
				</div>
				<input type="submit" value="отправить" name="send">
				<input type="hidden" name="action" value="submitForm" />
			</form>

		</div>
	</div>
</div>
