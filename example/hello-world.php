<?php

require_once 'autoload.php';

// Remember to set this so we know where our templates is located
define('PHIEW_VIEW_DIR', dirname(__FILE__) . '/views');

// Two ways to use templates ...

// #1: Use Phiew_View's static functions
Phiew_View::render('hello-world');

// #2: Create Phiew_View_Template object
// $template = new Phiew_View_Template();
// $template->render('hello-world');
