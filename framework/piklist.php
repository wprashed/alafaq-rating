<?php

  if (!defined('ABSPATH'))
  {
    exit;
  }

  if (!class_exists('Piklist'))
  {
    include_once 'includes/class-piklist.php';

    piklist::load();
  }

  function my_remove_filters(){
    remove_filter('piklist_admin_pages', array('piklist_setting', 'admin_pages'));
  }
  add_action( 'after_setup_theme', 'my_remove_filters' );