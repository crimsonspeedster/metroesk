<?php
$framework = get_theme_framework();

$tab_contacts = get_field('contacts');
$tab_contacts_repeater = $tab_contacts['repeater'];

$data = compact(
'tab_contacts',
'tab_contacts_repeater'
);