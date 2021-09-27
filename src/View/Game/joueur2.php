<?php ob_start(); ?>

<div class="container text-center">
    <h2><?php echo $winMessage ?></h2> 
</div>
<div class="row">
    <div class="col s12">
        <h3 class="center-align purple-text text-lighten-2">A <?php echo($_SESSION['pseudoPlayer2']) ?> de jouer</h3>
    </div>
</div>
<div class="row">
    <div class="col s4">
        <h4 class="center-align teal-text text-lighten-1"><?php echo($_SESSION['pseudoPlayer1']) ?></h4>
        <h5 class="center-align">Score : <?php echo($_SESSION['pointPlayer1']) ?> / 17</h5>
    </div>
    <div class="col s6  offset-s1">
        <h4 class="center-align purple-text text-lighten-2"><?php echo($_SESSION['pseudoPlayer2'] ) ?></h4>
        <h5 class="center-align">Score : <?php echo($_SESSION['pointPlayer2']) ?> / 17</h5>
    </div>
</div>
<div class="row">
    <div class="col s6 grid grid6">
        <div> </div>
        <div>A</div>
        <div>B</div>
        <div>C</div>
        <div>D</div>
        <div>E</div>
        <div>F</div>
        <div>G</div>
        <div>H</div>
        <div>I</div>
        <div>J</div>
        <?php
            for ($i = 1; $i < 11; $i++) {
                echo('<div>' . $i . '</div>');
                    for ($j = 1; $j < 11; $j++) {
                        if ($_SESSION['gameBoardPlayer2'][$i][$j] === 1) {
                            echo("<div class='bateau red lighten-4'></div>");
                        } elseif ($_SESSION['gameBoardPlayer2'][$i][$j] === 2) {
                            echo("<div>&#128165;</div>");
                        } elseif ($_SESSION['gameBoardPlayer2'][$i][$j] === 3) {
                            echo("<div>&#128167;</div>");
                        } else {
                            echo("<div> </div>");
                        }
                    }
            }              
        ?>
    </div>
</div>
<div class="row">
    <div class="col s6">
        <h5>Légende</h5>
        <ul>
            <li>&#128165; : Touché</li>
            <li>&#128167; : Tir manqué</li>
        </ul>
    </div>
    <div class="col s6">
        <form class="col s6" method="POST" >
            <div class="row">
                <div class="input-field col s3">
                    <input id="tir" type="text" class="validate" name="shoot">
                    <label for="tir">Tir</label>
                </div>
                <div class="col s3">
                    <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Feu !
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>


<?php require(__DIR__ . '/../base.php') ?>
