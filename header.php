<?php
/**
 * Header template.
 *
 * @package appluto-portfolio
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('tt-magic-cursor'); ?>>
<?php wp_body_open(); ?>
<?php
$appluto_option = function_exists('appluto_get_option')
    ? 'appluto_get_option'
    : function ($key, $default = '') {
        return get_theme_mod($key, $default);
    };

$header_logo_override      = $appluto_option('appluto_header_logo_override', '');
$header_lets_talk_label    = $appluto_option('appluto_header_lets_talk_label', 'Let’s Talk');
$header_lets_talk_url      = $appluto_option('appluto_header_lets_talk_url', home_url('/contact'));
$header_address            = $appluto_option('appluto_header_address', '308 Crescent Avenue, Level 3, Los Angeles, CA 90012, USA');
$header_contact_email      = $appluto_option('appluto_header_contact_email', get_option('admin_email'));
$header_contact_phone      = $appluto_option('appluto_header_contact_phone', '+99 (0) 257 757 6980');
$header_project_btn_label  = $appluto_option('appluto_header_project_btn_label', 'Start Your Project');
$header_project_btn_url    = $appluto_option('appluto_header_project_btn_url', home_url('/contact'));
$header_phone_link         = preg_replace('/[^0-9+]/', '', (string) $header_contact_phone);
?>

<div id="magic-cursor">
    <div id="ball"></div>
</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
    <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"></path>
        <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"></path>
    </svg>
</div>

<div class="right-sidebar-menu two font-alt">
    <div class="right-sidebar-close-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6694 3.0106C14.8839 2.78848 15.0026 2.49099 15 2.18219C14.9973 1.8734 14.8734 1.57801 14.6551 1.35966C14.4367 1.1413 14.1413 1.01744 13.8325 1.01475C13.5237 1.01207 13.2262 1.13078 13.0041 1.34531L8.00706 6.34236L3.01119 1.34531C2.90184 1.23589 2.77202 1.14907 2.62912 1.08983C2.48623 1.03058 2.33306 1.00005 2.17837 1C2.02368 0.999945 1.87049 1.03036 1.72756 1.08951C1.58462 1.14865 1.45473 1.23538 1.34531 1.34472C1.23589 1.45407 1.14907 1.58389 1.08983 1.72679C1.03058 1.86968 1.00005 2.02285 1 2.17754C0.999945 2.33223 1.03036 2.48542 1.08951 2.62835C1.14865 2.77129 1.23538 2.90118 1.34472 3.0106L6.34177 8.00765L1.34472 13.0047C1.12389 13.2257 0.99989 13.5253 1 13.8378C1.00011 14.1502 1.12432 14.4497 1.34531 14.6706C1.5663 14.8914 1.86596 15.0154 2.17837 15.0153C2.49078 15.0152 2.79036 14.891 3.01119 14.67L8.00706 9.67294L13.0041 14.67C13.2262 14.8845 13.5237 15.0032 13.8325 15.0005C14.1413 14.9979 14.4367 14.874 14.6551 14.6556C14.8734 14.4373 14.9973 14.1419 15 13.8331C15.0026 13.5243 14.8839 13.2268 14.6694 13.0047L9.67235 8.00765L14.6694 3.0106Z"></path>
        </svg>
    </div>
    <div class="sidebar-content-wrap">
        <h5 class="title">Creative Digital Agency &amp; Art Direction.</h5>
        <div class="address-area">
            <h5>New York</h5>
            <a href="#"><?php echo esc_html($header_address); ?></a>
        </div>
        <div class="contact-area">
            <h5>Contact Info</h5>
            <ul class="contact-list">
                <li class="single-contact">
                    <a href="mailto:<?php echo esc_attr(antispambot($header_contact_email)); ?>"><?php echo esc_html(antispambot($header_contact_email)); ?></a>
                </li>
                <li class="single-contact">
                    <a href="tel:<?php echo esc_attr($header_phone_link); ?>"><?php echo esc_html($header_contact_phone); ?></a>
                </li>
            </ul>
        </div>
        <a href="<?php echo esc_url($header_project_btn_url); ?>" class="primary-btn1">
            <span><?php echo esc_html($header_project_btn_label); ?></span>
            <span><?php echo esc_html($header_project_btn_label); ?></span>
        </a>
    </div>
</div>

<header class="header-area style-2 font-alt">
    <div class="container-fluid one d-flex flex-nowrap align-items-center justify-content-between">
        <div class="company-logo">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo_src       = $custom_logo_id ? wp_get_attachment_image_url($custom_logo_id, 'full') : '';
            $logo_src       = $header_logo_override ? $header_logo_override : $logo_src;
            if ($logo_src) :
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url($logo_src); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
        </div>

        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-logo-wrap">
                    <?php if ($logo_src) : ?>
                        <img src="<?php echo esc_url($logo_src); ?>" alt="<?php bloginfo('name'); ?>">
                    <?php else : ?>
                        <?php bloginfo('name'); ?>
                    <?php endif; ?>
                </a>
                <div class="menu-close-btn">
                    <i class="bi bi-x"></i>
                </div>
            </div>

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'menu-list',
                    'fallback_cb'    => 'appluto_primary_menu_fallback',
                    'walker'         => new Appluto_Menu_Walker(),
                )
            );
            ?>

            <div class="btn-and-contact-area d-lg-none d-block">
                <a href="<?php echo esc_url($header_lets_talk_url); ?>" class="primary-btn1 black-bg">
                    <span><?php echo esc_html($header_lets_talk_label); ?></span>
                    <span><?php echo esc_html($header_lets_talk_label); ?></span>
                </a>
            </div>
        </div>

        <div class="nav-right">
            <a href="<?php echo esc_url($header_lets_talk_url); ?>" class="primary-btn1 black-bg d-lg-flex d-none">
                <span><?php echo esc_html($header_lets_talk_label); ?></span>
                <span><?php echo esc_html($header_lets_talk_label); ?></span>
            </a>
            <div class="right-sidebar-button">
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M4.6142 0.138593C3.82636 -0.0461926 3.00645 -0.0461926 2.21861 0.138593C1.71263 0.257272 1.24984 0.514861 0.882348 0.882352C0.514858 1.24984 0.257268 1.71264 0.138589 2.21862C-0.0461965 3.00645 -0.0461965 3.82636 0.138589 4.6142C0.257268 5.12018 0.514858 5.58297 0.882348 5.95046C1.24984 6.31796 1.71263 6.57554 2.21861 6.69422C3.00645 6.87904 3.82636 6.87904 4.6142 6.69422C5.12017 6.57554 5.58297 6.31796 5.95046 5.95046C6.31795 5.58297 6.57554 5.12018 6.69422 4.6142C6.87904 3.82637 6.87904 3.00645 6.69422 2.21862C6.57554 1.71264 6.31795 1.24984 5.95046 0.882352C5.58297 0.514861 5.12017 0.257272 4.6142 0.138593ZM4.6142 9.30581C3.82636 9.12099 3.00645 9.12099 2.21861 9.30581C1.71263 9.42449 1.24984 9.68208 0.882348 10.0496C0.514858 10.4171 0.257268 10.8799 0.138589 11.3858C-0.0461965 12.1737 -0.0461965 12.9936 0.138589 13.7814C0.257268 14.2874 0.514858 14.7502 0.882348 15.1177C1.24984 15.4852 1.71263 15.7428 2.21861 15.8614C3.00645 16.0462 3.82635 16.0462 4.6142 15.8614C5.12017 15.7428 5.58297 15.4852 5.95046 15.1177C6.31795 14.7502 6.57554 14.2874 6.69422 13.7814C6.87904 12.9936 6.87904 12.1737 6.69422 11.3858C6.57554 10.8799 6.31795 10.4171 5.95046 10.0496C5.58297 9.68208 5.12017 9.42449 4.6142 9.30581ZM13.7814 0.138593C12.9936 -0.0461926 12.1737 -0.0461926 11.3858 0.138593C10.8798 0.257272 10.4171 0.514861 10.0496 0.882352C9.68207 1.24984 9.42448 1.71264 9.3058 2.21862C9.12099 3.00645 9.12099 3.82637 9.3058 4.6142C9.42448 5.12018 9.68207 5.58297 10.0496 5.95046C10.4171 6.31796 10.8798 6.57554 11.3858 6.69422C12.1737 6.87904 12.9936 6.87904 13.7814 6.69422C14.2874 6.57554 14.7502 6.31796 15.1177 5.95046C15.4852 5.58297 15.7428 5.12018 15.8614 4.6142C16.0462 3.82636 16.0462 3.00646 15.8614 2.21862C15.7428 1.71264 15.4852 1.24984 15.1177 0.882352C14.7502 0.514861 14.2874 0.257272 13.7814 0.138593ZM13.7814 9.30581C12.9936 9.12099 12.1737 9.12099 11.3858 9.30581C10.8798 9.42449 10.4171 9.68208 10.0496 10.0496C9.68207 10.4171 9.42448 10.8799 9.3058 11.3858C9.12099 12.1737 9.12099 12.9936 9.3058 13.7814C9.42448 14.2874 9.68207 14.7502 10.0496 15.1177C10.4171 15.4852 10.8798 15.7428 11.3858 15.8614C12.1737 16.0462 12.9936 16.0462 13.7814 15.8614C14.2874 15.7428 14.7502 15.4852 15.1177 15.1177C15.4852 14.7502 15.7428 14.2874 15.8614 13.7814C16.0462 12.9936 16.0462 12.1737 15.8614 11.3858C15.7428 10.8799 15.4852 10.4171 15.1177 10.0496C14.7502 9.68208 14.2874 9.42449 13.7814 9.30581Z"></path>
                    </g>
                </svg>
            </div>
            <div class="sidebar-button mobile-menu-btn">
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M1.03556 2.52631H8.41896C8.99112 2.52631 9.45456 1.96107 9.45456 1.26316C9.45456 0.565247 8.99112 0 8.41896 0H1.03556C0.463399 0 0 0.565247 0 1.26316C0 1.96107 0.463399 2.52631 1.03556 2.52631Z"></path>
                        <path d="M0.984016 9.26267H15.016C15.5597 9.26267 16 8.6974 16 7.99948C16 7.30157 15.5597 6.73633 15.016 6.73633H0.984016C0.440337 6.73633 0 7.30157 0 7.99948C0 8.6974 0.440337 9.26267 0.984016 9.26267Z"></path>
                        <path d="M15.0441 13.4736H8.22859C7.70046 13.4736 7.27271 14.0389 7.27271 14.7367C7.27271 15.4347 7.70046 15.9999 8.22859 15.9999H15.0441C15.5722 15.9999 16 15.4347 16 14.7367C16 14.0389 15.5722 13.4736 15.0441 13.4736Z"></path>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</header>

<div id="smooth-wrapper">
    <div id="smooth-content">
