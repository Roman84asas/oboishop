<?php
/**
 * Template part for questions
 *
 */

defined( 'ABSPATH' ) || exit;

if (isset($_REQUEST["send"])) {
	$name_client   = htmlentities($_POST['name']);
	$email_address = htmlentities($_POST['email']);
	$all_text      = htmlentities($_POST['message']);
	$admin_email    = get_option('admin_email');
	$admin_email = str_replace( ']]>', ']]>', $admin_email );
	$admin_email = wp_strip_all_tags($admin_email);

	$subject = 'Вопрос менеджеру с контента сайта';
	$messageText = '<strong>Имя задающего вопрос: </strong> '.$name_client.'<br> <strong>Email задающего вопрос: </strong> '.$email_address.'<br> <strong>Содержание вопроса: </strong> '.$all_text.'<br> ';
	wp_mail( $admin_email, $subject, $messageText);
}
?>
?>


<div class="questions" id="questions">
	<img src="/wp-content/themes/oboishop/assets/img/man.jpg">
	<div class="questions-text">
		<h3>Остались вопросы?</h3>
		<p>
			Я - менеджер компании. Хотите уточнить детали или готовы оставить заявку?
		</p>
		<div class="questions-btns">

			<div class="quest-open-tab">Отправить сообщение</div>
			<form method="post" id="quest-open-tab2" class="quest-tab form-quest2">
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
				<?php wp_nonce_field(); ?>
			</form>

		</div>
	</div>
</div>
