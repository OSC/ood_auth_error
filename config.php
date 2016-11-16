<?php

class Config {
  public $title = 'Open OnDemand';
  public $nav_background_color = '#53565a';
  public $nav_border_color = '#000';
  public $nav_brand_text_color = '#fff';
  public $change_password_url = null;
  public $help_email = '';
  public $help_website = '';
}

$config = new Config;

/* OSC Example */
$config->title = 'OSC OnDemand';
$config->nav_background_color = '#cf102d';
$config->nav_border_color = '#a00c23';
$config->change_password_url = 'https://my.osc.edu';
$config->help_email = 'oschelp@osc.edu';
$config->help_website = 'https://www.osc.edu/content/email_osc';

/* Minnesota Supercomputing Center Example */
/* $config->title = 'MSI OnDemand'; */
/* $config->nav_background_color = '#ffd75f'; */
/* $config->nav_border_color = '#000'; */
/* $config->nav_brand_text_color = '#000'; */
/* $config->help_email = 'help@msi.umn.edu'; */
/* $config->help_website = 'https://www.msi.umn.edu/support/request'; */
?>
