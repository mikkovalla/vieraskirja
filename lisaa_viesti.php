<?php include('core/init.php'); ?>

<?php
//luo tietokanta olio
$db = new Tietokanta();

//Aja SQL kysely
$db->query("INSERT INTO `viesti` (nimi, viesti) VALUES (:nimi, :viesti)");

//Liitä arvot
$db->bind(':nimi', $_POST['nimi']);
$db->bind(':viesti', $_POST['viesti']);

//Suorita kysely
if($db->execute()){
	echo "Viesti lähetetty";
} else {
	echo "Tapahtui virhe";
}
?>