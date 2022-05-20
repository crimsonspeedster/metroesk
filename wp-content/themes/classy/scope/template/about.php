<?php
$framework = get_theme_framework();

$tab_about = get_field('about');
$tab_opportunities = get_field('opportunities');
$tab_license = get_field('license');
$tab_team = get_field('team');
$tab_partners = get_field('partners');
$tab_certificates = get_field('certificate');

$tab_partners_slider = $tab_partners['repeater'];
$tab_opportunities_repeater = $tab_opportunities['repeater'];
$tab_certificates_repeater = $tab_certificates['repeater'];
$tab_team_repeater = $tab_team['repeater'];
$tab_team_group = $tab_team['team'];

$data = compact(
    'tab_about',
    'tab_opportunities',
    'tab_license',
    'tab_team',
    'tab_partners',
    'tab_certificates',
    'tab_partners_slider',
    'tab_opportunities_repeater',
    'tab_certificates_repeater',
    'tab_team_repeater',
    'tab_team_group'
);