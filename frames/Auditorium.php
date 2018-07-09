<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="HEIMDAL">
    <meta name="theme-color" content="#716aca">
    <meta property="og:title" content="LokiMaps - Wij hebben auditorium <?php echo $naam;?> gevonden!">
    <?php
$url = 'https://raw.githubusercontent.com/Heimdalbe/HOGENTimg/master/'.$afbeelding;
$array = get_headers($url);
$string = $array[0];
if(strpos($string,"200"))
  {echo '<meta property="og:image" content="'.$url.'"><meta name="twitter:image" content="'.$url.'">';
  }
  else
  {
    echo '<meta property="og:image" content="https://maps.heimdal.be/assets/images/thumbnail.jpg"><meta name="twitter:image" content="https://maps.heimdal.be/assets/images/thumbnail.jpg">';
  }
?>
    <meta name="twitter:title" content="LokiMaps - Wij hebben auditorium <?php echo $naam;?> gevonden!">
    <meta name="twitter:description" content="LokiMaps - Wij hebben auditorium <?php echo $naam;?> gevonden!">
    <meta name="twitter:card" content="summary_large_image">
    <title>LokiMaps - Wij hebben de auditorium <?php echo $naam;?> gevonden!</title>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="/assets/css/one-page-wonder.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container"><a class="navbar-brand" href="/">Hogent - <?php echo $naam;?></a></div>
    </nav>
    <header style="background-image: url('<?php echo $url;?>');" class="masthead text-center text-white"></header>

    <section>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="p-5">

                        <h2 class="display-4">Wij hebben jouw auditorium gevonden!</h2>


                        <p>Jouw auditorium bevind zich op <b>'<?php echo $adress;?>'</b>. Indien jij deze campus niet weet zijn klik <a href="<?php echo $start;?>">hier</a>.</p>
                        <p>
                            <?php echo $route;?>
                        </p>
                        <hr>
                          <p style="font-size:11px;">
                              Locatie toegevoegd door <a href="https://heimdal.be/<?php echo $door;?>"><?php echo $door;?></a> | Raporteren of verbeteren kan via <a href="http://m.me/heimdal.be">Messenger</a> of <a href="mailto:gate@heimdal.be">gate@heimdal.be</a> | <a href="https://github.com/Heimdalbe/LOKImaps/">API Example</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Heimdal & HoGent</p>
        </div>
    </footer>



    
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>