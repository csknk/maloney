<?php

$contact = new Carawebs\Maloney\Fetch\Contact();

var_dump($contact);

Carawebs\Maloney\Display\ClickMobile::button();

echo "<h2>Mobile: " . Carawebs\Maloney\Fetch\GetContact::mobile_number() . "</h2>";

the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
