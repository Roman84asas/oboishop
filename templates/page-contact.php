<?php
/*
  * Template name: Contact
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
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
                            <a href="#" class="btn btn-download">
                                <i class="icon icon-download"></i>
                                <p>Скачать схему проезда<br><span> jpg, 259 Кбайт</span></p>
                            </a>
                            <a href="#" class="btn btn-download">
                                <i class="icon icon-download"></i>
                                <p>Скачать реквизиты<br><span> jpg, 75 Кбайт</span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts-item">
                            <h2>Обратная связь<br><span> Также Вы можете оставить заявку, чтобы с Вами связался наш специалист</span></h2>
                            <div class="contacts-form form-block">
                                <form class="form-shake">
                                    <div style="display: none;">
                                        <input type="text" name="fullName" value="" />
                                    </div>
                                    <input type="hidden" name="action" value="submitForm" />
                                    <label>
                                        <p>ФИО</p>
                                        <div>
                                            <input type="text" name="name">
                                        </div>
                                    </label>
                                    <label>
                                        <p>Email</p>
                                        <div>
                                            <input type="text" name="email">
                                        </div>
                                    </label>
                                    <label>
                                        <p>Текст вашего сообщения</p>
                                        <div>
                                            <textarea name="comment"></textarea>
                                        </div>
                                    </label>
                                    <button name="send" class="btn btn-contact">Отправить</button>
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