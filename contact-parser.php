<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);
    fclose($handle);
    foreach($contacts as &$contact) {
        $contact = explode("|", $contact);
        $contact[1] = substr($contact[1], 0, 3) . "-" . substr($contact[1], 3, 3) . "-" . substr($contact[1], 6);
    }
    return $contacts;
}

var_dump(parseContacts('contacts.php'));
