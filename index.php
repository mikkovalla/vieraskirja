<?php include('core/init.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Vieraskirja</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-6 columns">
                        <h1>Lisaa viesti</h1>
                        <form id="lisaaViesti" action="#" method="post">
                            <div class="row">
                                <div class="large-6 columns">
                                    <label>Nimi
                                        <input name="nimi" type="text" placeholder="Nimesi" />
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <label>Viesti
                                        <textarea name="viesti" placeholder="Viestisi"></textarea>
                                    </label>
                                </div>
                            </div>
                            <input name="submit" type="submit" class="add-btn button right small" value="Lähetä">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Viestit näkyvät täss-->
        <h2>Viestejä:</h2>
        <div id="viesteja"></div>
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
