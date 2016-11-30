<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/fties.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Empty title');

// Display template: output html
$templateParser->display('head.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';
$templateParser->assign('pageding', $action);
switch ($action) {

    case 'home':
      $templateParser->display('views/home.tpl');
      break;

    case 'admin';
      $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'adminhome';
      $templateParser->assign('pagedinges', $_GET['cms_action']);
      $templateParser->display('adminheader.tpl');
      switch($cms_action) {
        case 'adminhome':

          break;

        case 'shownewsarticles':
          // Show all items
          include('model/select_all_newsarticles.php');
          $templateParser->assign('result', $result);

          $templateParser->display('show_newsarticles.tpl');
          break;

        case 'editnewsarticles':
          // Edit items
          break;

        case 'deletenewsarticles':
          // Call delete model
          $id = isset($_GET['id'])?$_GET['id']:0;
          include('model/delete_item.php');
          header("Location: http://localhost/jaar2/project/framework/?page=admin&cms_action=show");
          break;

        case 'insertnewsarticles':
          // Insert items
          $templateParser->display('insert_newsarticles.tpl');
          break;
      }
      // Go to CMS
      break;

}
$templateParser->display('views/footer.tpl');
