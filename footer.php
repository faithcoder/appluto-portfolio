<?php
/**
 * Footer template.
 *
 * @package appluto-portfolio
 */
?>
<footer class="footer-section two font-alt">
    <div class="footer-main-warp">
        <div class="container-fluid one">
            <div class="company-logo-area">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="company-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer-logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
                <p>We are Global Digital Brand Agency &amp; Art Direction.</p>
            </div>
            <div class="company-contact-info">
                <div class="address-area">
                    <h3 class="widget-title">Office Location</h3>
                    <a href="#">308 Crescent Avenue, Level 3, Los Angeles, CA 90012, USA</a>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/company-barcode.png" alt="barcode">
                </div>
                <div class="contact-area">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="contact-list">
                        <li class="single-contact">
                            <a href="mailto:<?php echo esc_attr(antispambot(get_option('admin_email'))); ?>"><?php echo esc_html(antispambot(get_option('admin_email'))); ?></a>
                        </li>
                        <li class="single-contact">
                            <a href="tel:+9902577576980">+99 (0) 257 757 6980</a>
                        </li>
                    </ul>
                </div>
                <div class="social-area">
                    <h3 class="widget-title">Social media</h3>
                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://x.com/"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="bx bxl-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-menu-wrap">
        <div class="container-fluid one">
            <div class="footer-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-menu-list',
                        'fallback_cb'    => false,
                    )
                );
                ?>
                <ul class="footer-menu-list">
                    <li><a href="#"><?php esc_html_e('Privacy Policy', 'appluto-portfolio'); ?></a></li>
                    <li><a href="#"><?php esc_html_e('Terms & Condition', 'appluto-portfolio'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>
            <svg width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.8125 6.5C0.8125 8.00842 1.41172 9.45506 2.47833 10.5217C3.54494 11.5883 4.99158 12.1875 6.5 12.1875C8.00842 12.1875 9.45506 11.5883 10.5217 10.5217C11.5883 9.45506 12.1875 8.00842 12.1875 6.5C12.1875 4.99158 11.5883 3.54494 10.5217 2.47833C9.45506 1.41172 8.00842 0.8125 6.5 0.8125C4.99158 0.8125 3.54494 1.41172 2.47833 2.47833C1.41172 3.54494 0.8125 4.99158 0.8125 6.5ZM13 6.5C13 8.22391 12.3152 9.87721 11.0962 11.0962C9.87721 12.3152 8.22391 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.68482 9.87721 0 8.22391 0 6.5C0 4.77609 0.68482 3.12279 1.90381 1.90381C3.12279 0.68482 4.77609 0 6.5 0C8.22391 0 9.87721 0.68482 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5ZM6.61862 4.056C5.63387 4.056 5.05294 4.8035 5.05294 6.08887V6.95012C5.05294 8.22656 5.62413 8.9505 6.61862 8.9505C7.41406 8.9505 7.95194 8.47437 8.02344 7.79837H9.07563V7.87394C8.99438 9.05044 7.9755 9.87838 6.61375 9.87838C4.91481 9.87838 3.95769 8.79288 3.95769 6.95094V6.07912C3.95769 4.24206 4.9335 3.12325 6.61456 3.12325C7.98037 3.12325 8.99925 3.97962 9.07563 5.213V5.2845H8.02344C7.95194 4.57031 7.39944 4.056 6.61862 4.056Z"></path>
            </svg>
            <?php echo esc_html(sprintf(__('Copyright %1$s %2$s', 'appluto-portfolio'), gmdate('Y'), get_bloginfo('name'))); ?>
        </p>
    </div>
</footer>

    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
