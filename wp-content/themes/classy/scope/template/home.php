<?php

$template_filename = get_post_meta( get_the_ID(), '_wp_page_template', true );

show_pre($template_filename);