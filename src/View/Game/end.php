<?php ob_start(); ?>

<div class="row">
    <div class="col s12">
        <h1 class="center-align">Game over !</h1>
        <h4 class="center-align card-panel">
            <?php 
            if($_SESSION['pointPlayer1'] >= 17) {
                echo($_SESSION['pseudoPlayer1']);
            }
            else if (($_SESSION['pointPlayer2'] >= 17)) {
                echo($_SESSION['pseudoPlayer2']);
            }
            ?> 
        a gagné 👏👏👏
        </h4>
    </div>
</div>
<div class="row">
<div class="col s4">
        <h4 class="center-align teal-text text-lighten-1"><?php echo('<div>' . $_SESSION['pseudoPlayer1'] . '</div>') ?></h4>
        <h5 class="center-align">Score : <?php echo($_SESSION['pointPlayer1']) ?> / 17</h5>
    </div>
    <div class="col s6  offset-s1">
        <h4 class="center-align purple-text text-lighten-2"><?php echo($_SESSION['pseudoPlayer2']) ?></h4>
        <h5 class="center-align">Score : <?php echo($_SESSION['pointPlayer2']) ?> / 17</h5>
    </div>
</div>
<form action="" method="post">
    <button type="submit" name="restart" class="btn waves-effect waves-light indigo darken-4">Restart</button>
</form>
<?php $content = ob_get_clean(); ?>


<?php require(__DIR__ . '/../base.php') ?>