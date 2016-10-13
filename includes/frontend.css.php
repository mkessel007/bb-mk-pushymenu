/*
<?php echo $settings->textarea_field;?>
 */

.pushy ul {
    text-align:<?php echo $settings->menu_item_align;
?>;
    padding: 0;
    list-style: none;
}


/* Menu Movement */

.pushy-left {
    -webkit-transform: translate3d(-200px, 0, 0);
    -ms-transform: translate3d(-200px, 0, 0);
    transform: translate3d(-200px, 0, 0);
}

a.menu-btn {
    background-color: #<?php echo $settings->btn_background;
?>;
<?php echo $settings->background_hover;
?>;
    color: #<?php echo $settings->btn_text_color;
?>;
    padding: <?php echo $settings->btn_padding_top;
?>px <?php echo $settings->btn_padding_side;
?>px;
    cursor: pointer;
    text-decoration: none;
    float: <?php echo $settings->menu_side?>;
}

a.menu-btn:hover {
    background-color: #<?php echo $settings->btn_background_hover;
?>;
    color: #<?php echo $settings->btn_text_color_hover;
?>;
    text-decoration: none;
}



.pushy {
    background-color: #<?php echo $settings->menu_background;
?>;
 padding: <?php echo $settings->menu_padding_top;
?>px <?php echo $settings->menu_padding_side;
?>px;
width: <?php echo $settings->menu_width;
?>px;
}



.pushy a {
  display: block;
  color: #<?php echo $settings->menu_text_color;
?>;
  padding: <?php echo $settings->menu_padding_top;
?>px <?php echo $settings->menu_padding_side;
?>px;
;
  text-decoration: none;
  outline: 0;
}
.pushy a:hover {
    color: #<?php echo $settings->menu_text_color_hover;
?>;
}


.pushy-left {
  -webkit-transform: translate3d(-<?php echo $settings->menu_width;
?>px, 0, 0);
  -ms-transform: translate3d(-<?php echo $settings->menu_width;
?>px, 0, 0);
  transform: translate3d(-<?php echo $settings->menu_width;
?>px, 0, 0);
}

.pushy-right {
  -webkit-transform: translate3d(<?php echo $settings->menu_width;
?>px, 0, 0);
  -ms-transform: translate3d(<?php echo $settings->menu_width;
?>px, 0, 0);
  transform: translate3d(<?php echo $settings->menu_width;
?>px, 0, 0);
}

header, header .* {
    z-index: 9000 !important;
}

/*
calc(<?php echo $settings->overlay_opacity;?> / 100);

*/

.pushy-open-left .site-overlay,
.pushy-open-right .site-overlay {
  opacity: calc(<?php echo $settings->overlay_opacity;?>/ 100);
  background-color: #<?php echo $settings->overlay_background;
?>;

  -webkit-animation: fade 500ms;
  animation: fade 500ms;
}


html, body {
    overflow-x: hidden;
    height: 100%;
    -webkit-overflow-scrolling: touch;
}