<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Tietokanta();

//Run Query
$db->query("SELECT * FROM `viesti`");

//Assign Result Set
$viestit = $db->resultset();
?>
<div class="row">
    <div class="large-12 columns">
        <table>
            <thead>
                <tr>
                    <th width="50">Nimi</th>
                    <th width="300">Viesti</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($viestit as $viesti) : ?>
                    <tr>
                        <td><a href="viesti.html"><?php echo $viesti->nimi; ?></a></td>
                        <td><?php echo $viesti->viesti; ?></td>
                        <td>
                            <ul class="button-group">
                                
                                <!--Viestin muuttamisen lomaketta ei ole lisätty-->
                                <!--<li>
                                    <form id="muutaViesti" action="#" method="post">
                                        <input type="hidden" name="id" value="<?php echo $viesti->id; ?>" />
                                        <input type="submit" class="add-btn button tiny " value="Muuta" />
                                    </form>                                   
                                </li>-->
                                <li>
                                    <form id="poistaViesti" action="#" method="post">
                                        <input type="hidden" name="id" value="<?php echo $viesti->id; ?>" />
                                        <input type="submit" class="delete-btn button tiny secondary alert" value="Poista" />
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
