<?php

 error_log("New contact", 0);
  $contact->from_name = $_POST['name'];
  error_log("New contact $contact->from_name", 0);
  $contact->from_email = $_POST['email'];
  error_log("New contact $contact->from_name", 0);
  $contact->subject = $_POST['subject'];
  error_log("New contact $contact->from_name", 0);

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
