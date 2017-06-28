<?php
$usernames = json_decode(file_get_contents('reserved-usernames/reserved-usernames.json'));

$php = '<?php
namespace p3k;

function is_reserved_username($username) {
  return in_array($username, '.json_encode($usernames).')
}
';

file_put_contents('reserved-usernames.php', $php);
