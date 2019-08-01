<?php

require_once __DIR__.'/bootstrap.php';

// Create a person contact list
$persons = [
  [
      'name'          => 'John Doe',
      'age'           => '45',
      'birthday'      => '01.01.1980',
  ],
  [
      'name'          => 'Jim Doe',
      'age'           => '21',
      'birthday'      => '01.12.1980',
  ],
  [
      'name'          => 'Martha Doe',
      'age'           => '40',
      'birthday'      => '01.09.1980',
  ],
];

// Render our view
$twig->render('index.html');
echo $template->renderBlock('content', array('persons' => $persons));

?>