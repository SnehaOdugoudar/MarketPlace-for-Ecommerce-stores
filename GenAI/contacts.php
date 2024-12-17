
<?php
if (file_exists('contacts.txt')) {
    $contacts = file_get_contents('contacts.txt');
    echo nl2br($contacts);
} else {
    echo "Contacts file not found.";
}
?>
