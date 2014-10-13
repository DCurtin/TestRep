<?php
ignore_user_abort(true);

if (!empty($_POST['payload'])) {
$file = fopen( '/root/git-pull-requests/example', 'w+' );
fclose( $file );
}
?>
