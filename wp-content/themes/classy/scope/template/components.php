<?php
$framework = get_theme_framework();

$title = get_the_title();
$components = get_field('components_group');

$causes = get_field('causes');
$causes_slider = $causes['repeater'];

$steps = get_field('steps')['repeater'];

$data = compact(
    'title',
    'components',
    'causes',
    'causes_slider',
    'steps',
);