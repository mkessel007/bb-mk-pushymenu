<!-- Pushy Menu -->
<?php
$menu_id = $settings->menu;
$side    = $settings->menu_side;
wp_nav_menu(array(
		'menu'       => $menu_id,
		'items_wrap' => '<nav class="pushy pushy-'.$side.' "><ul
                        id="%1$s" class="%2$s">%3$s</ul></nav>',
	));

?>
<!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <!-- Menu Button -->
            <a class="menu-btn"><i class="<?php echo $settings->btn_icon;?>"></i>
<?php echo $settings->btn_text;
?> </a>
        </div>