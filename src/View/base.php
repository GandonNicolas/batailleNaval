<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/assets/css/materialize.min.css"  media="screen,projection"/>

        <link type="text/css" rel="stylesheet" href="/assets/css/app.css"/>

        <!--Let browser know website is optimized for mobile-->
        <title><?php echo($title ?? '');?></title>
    </head>
    <body>
        <header class="container">
            <nav>
                <div class="nav-wrapper indigo darken-4">
                    <a href="/" class="brand-logo center">Touché, Coulé</a>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mt-5">
                <?php echo($content ?? '');?>
            </div>
        </main> 
        
        <footer class="page-footer indigo darken-4">
          <div class="footer-copyright">
            <div class="container">
                © 2021 Copyright Text
                <a class="grey-text text-lighten-4 right" href="https://github.com/GandonNicolas" target="blank">Fait par <strong>Nicolas Gandon</strong></a>
            </div>
          </div>
        </footer>
    </body>
    <script type="text/javascript" src="/assets/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
