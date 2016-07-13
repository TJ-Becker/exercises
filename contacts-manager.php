<?php
    $filename = 'contacts.php';
    $contents = trim(file_get_contents($filename));

    function addNew($filename) {
        $handle = fopen($filename, 'a');
        fwrite(STDOUT, "Contact name: ");
        $contactName = trim(fgets(STDIN));
        fwrite(STDOUT, "Contact number: ");
        $contactNumber =  trim(fgets(STDIN));
        fwrite($handle, $contactName . '|' . $contactNumber . PHP_EOL);
        fclose($handle);
    }

    function searchContacts($contents, $filename = false, $delete = false)
    {
        $contactArray = explode("\n", $contents);
        fwrite(STDOUT, "Search by contact or phone number: ");
        $search = trim(fgets(STDIN));
        foreach ($contactArray as $index => $contact) {
            if (is_int(strpos($contact, $search))) {
                $refinedContacts[] = $contactArray[$index];
            } else {
                $contactsToKeep[] = $contactArray[$index];
            }
        }
        foreach ($refinedContacts as $contact) {
            echo $contact . PHP_EOL;
        }
        if ($delete == true) {
            fwrite(STDOUT, "Are you sure you want to delete the contacts shown above? (y/n)");
            $deletion = trim(fgets(STDIN));
            if ($deletion == "y") {
                $handle = fopen($filename, 'w');
                $toKeepString = implode("\n", $contactsToKeep);
                fwrite($handle, $toKeepString);
                fclose($handle);
            }
        }
    }

    function menu($contents, $filename)
    {
        do {
            echo "1) Show all contacts. \n";
            echo "2) Add a new contact. \n";
            echo "3) Search for contact by name. \n";
            echo "4) Delete an existing contact. \n";
            echo "5) Exit. \n";
            fwrite(STDOUT, "Please select one of the options shown above: ");
            $choice = trim(fgets(STDIN));
            if ($choice === "1") {
                echo $contents . PHP_EOL;
            } else if ($choice === "2") {
                addNew($filename);
            } else if ($choice === "3") {
                searchContacts($contents);
            } else if ($choice === "4") {
                searchContacts($contents, $filename, true);
            }
        } while ($choice !== "5");
    }

    menu($contents, $filename);