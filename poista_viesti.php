<?php include('core/init.php'); ?>

<?php
//luodaan tietokanta olio
$db = new Tietokanta();

//ajetaan sql kysely
$db->query("DELETE FROM `viesti` WHERE id = :id");

//asetetaan arvot
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Viesti poistettu";
} else {
	echo "Tapahtui virhe";
}
?>