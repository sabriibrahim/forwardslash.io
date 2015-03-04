<?php

if ( is_user_logged_in() ) {
    get_template_part( 'bones-index' );
} else {
    get_template_part( 'landing/index' );
}

?>