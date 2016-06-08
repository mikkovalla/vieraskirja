<?php include('core/init.php'); ?>

<?php

//luo tietokanta olio
$db = new Tietokanta();

//ajetaan sql kysely
$db->query("UPDATE `viesti` SET nimi = :nimi, viesti = :viesti WHERE id = :id");

//asetetaan arvot
$db->bind(':nimi', $_POST['nimi']);
$db->bind(':viesti', $_POST['viesti']);
$db->bind(':id', $_POST['id']);

if ($db->execute()) {
    echo "Viesti muutettu";
} else {
    echo "Tapahtui virhe";
}
?>