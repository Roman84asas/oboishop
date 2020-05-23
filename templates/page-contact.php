<?php
/*
  * Template name: Contact
  * */
defined( 'ABSPATH' ) || exit;

get_header();

$admin_email    = get_option('admin_email');
$admin_email = str_replace( ']]>', ']]>', $admin_email );
$admin_email = wp_strip_all_tags($admin_email);

if (isset($_REQUEST["Clsend"])) {
	$name_client   = htmlentities($_POST['Clname']);
	$email_address = htmlentities($_POST['Clemail']);
	$all_text      = htmlentities($_POST['Clcomment']);

	$subject = 'Вопрос менеджеру с контента сайта';
	$messageText = '<strong>Имя задающего вопрос: </strong> '.$name_client.'<br> <strong>Email задающего вопрос: </strong> '.$email_address.'<br> <strong>Содержание вопроса: </strong> '.$all_text.'<br> ';
	wp_mail( $admin_email, $subject, $messageText);
}
?>
    <div class="contact_content">
        <div class="inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contacts-item">
                            <h2>Контакты<br><span> Связаться с нами Вы можете любым удобным способом</span></h2>
                            <div class="foot-item foot-item-mod"><i class="icon icon-contact1"></i>
                                <div class="foot-item-right">
	                                <?php
	                                // Get all entered urls from the database
	                                $phone = carbon_get_theme_option( 'obo_header_phone' );
	                                if ( $phone) { ?>
                                        <h6 class="tel"><?php echo esc_attr($phone); ?><br><span>звонки по России</span></h6>
	                                <?php } ?>
                                </div>
                            </div>
                            <div class="foot-item"><i class="icon icon-contact2"></i>
                                <div class="foot-item-right">
                                    <p>г. Москва, Кедрова д.5</p>
                                </div>
                            </div>
                            <div class="foot-item"><i class="icon icon-contact3"></i>
                                <div class="foot-item-right">
                                    <p>
	                                    <?php
	                                    // Get all entered urls from the database
	                                    $mail = carbon_get_theme_option( 'obo_header_email' );
	                                    if ( $mail) { ?>
                                            <a href="mailto:<?php echo esc_attr($mail); ?>">
			                                    <?php echo esc_attr($mail); ?>
                                            </a>
	                                    <?php } ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                            $file_scheme_to  = carbon_get_theme_option( 'obo_scheme_to' );
                            $file_requisites = carbon_get_theme_option( 'obo_requisites' );
                            if ($file_scheme_to) { ?>
                            <a href="<?php echo esc_url(wp_get_attachment_url($file_scheme_to)); ?>" class="btn btn-download" download>
                            <?php } else { ?>
	                        <a href="#" class="btn btn-download">
                            <?php } ?>
                                <i class="icon icon-download"></i>
                                <p>Скачать схему проезда<br><span> jpg, 259 Кбайт</span></p>
                            </a>

                            <?php if ($file_requisites) { ?>
                            <a href="<?php echo esc_url(wp_get_attachment_url($file_requisites)); ?>" class="btn btn-download" download>
                            <?php } else { ?>
                            <a href="#" class="btn btn-download">
			                <?php } ?>
                                <i class="icon icon-download"></i>
                                <p>Скачать реквизиты<br><span> jpg, 75 Кбайт</span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts-item">
                            <h2>Обратная связь<br><span> Также Вы можете оставить заявку, чтобы с Вами связался наш специалист</span></h2>
                            <div class="contacts-form form-block">
                                <form method="post" class="form-shake">
                                    <div style="display: none;">
                                        <input type="text" name="fullName" value="" />
                                    </div>
                                    <input type="hidden" name="action" value="submitForm" />
                                    <label>
                                        <p>ФИО</p>
                                        <div>
                                            <input type="text" name="Clname">
                                        </div>
                                    </label>
                                    <label>
                                        <p>Email</p>
                                        <div>
                                            <input type="text" name="Clemail">
                                        </div>
                                    </label>
                                    <label>
                                        <p>Текст вашего сообщения</p>
                                        <div>
                                            <textarea name="Clcomment"></textarea>
                                        </div>
                                    </label>
                                    <button name="Clsend" class="btn btn-contact">Отправить</button>
	                                <?php wp_nonce_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map"><img src="/wp-content/themes/oboishop/assets/img/map.png"></div>
    </div>
<?php get_footer();