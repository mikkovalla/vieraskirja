$(document).ready(function () {

    //Näytä vietit sivua ladattaessa
    naytaViestit();

    //lisää viesti
    $(document).on('submit', '#lisaaViesti', function () {
        //Lähetä lomakkeen data
        $.post("lisaa_viesti.php", $(this).serialize())
                .done(function (data) {
                    console.log(data);
                    naytaViestit();
                });
        return false;
    });

    //Viestin muuttamista ei ole määritelty
    //Muuta viestiä
    /*$(document).on('submit', '#muutaViesti', function () {

        $.post("muokkaa_viesti.php", $(this).serialize())
                .done(function (data) {
                    console.log(data);
                    naytaViestit();
                });
        return false;
    });*/

    //Poista viesti
    $(document).on('submit', '#poistaViesti', function () {

        $.post("poista_viesti.php", $(this).serialize())
                .done(function (data) {
                    console.log(data);
                    naytaViestit();
                });
        return false;
    });

    //Nayta viestit
    function naytaViestit() {
        setTimeout("$('#viesteja').load('viestit.php')", 500);
    }
});
