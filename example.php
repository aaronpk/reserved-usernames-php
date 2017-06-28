<?php
require_once('reserved-usernames.php');

$username = 'login';

if(p3k\is_reserved_username($username)) {
  echo "Username '$username' is reserved\n";
} else {
  echo "Username '$username' is safe\n";
}
