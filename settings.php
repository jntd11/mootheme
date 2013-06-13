<?php

/**
 * Settings for the fuji theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Logo file setting
    $name = 'theme_fuji/logo';
    $title = get_string('logo','theme_fuji');
    $description = get_string('logodesc', 'theme_fuji');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);

    // Tagline setting
    $name = 'theme_fuji/tagline';
    $title = get_string('tagline','theme_fuji');
    $description = get_string('taglinedesc', 'theme_fuji');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);

    // Link colour setting
    $name = 'theme_fuji/linkcolor';
    $title = get_string('linkcolor','theme_fuji');
    $description = get_string('linkcolordesc', 'theme_fuji');
    $default = '#f25f0f';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'linkcolor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Block region width
    $name = 'theme_fuji/regionwidth';
    $title = get_string('regionwidth','theme_fuji');
    $description = get_string('regionwidthdesc', 'theme_fuji');
    $default = 250;
    $choices = array(180=>'180px', 190=>'190px', 200=>'200px', 210=>'210px', 220=>'220px', 240=>'240px', 250=>'250px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_fuji/customcss';
    $title = get_string('customcss','theme_fuji');
    $description = get_string('customcssdesc', 'theme_fuji');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);
}