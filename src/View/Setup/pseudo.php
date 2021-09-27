<?php ob_start(); ?>

<!-- Page Content goes here -->
<div class="row">
    <?php 
        if (!empty($errorMessage)) {
            echo('<div class="bg-danger text-center">' .$errorMessage. '</div>');
        } 
    ?>
    <form class="col s12" method="POST" action="">
        <div class="row">
            <div class="input-field col s12">
                <input id="joueur1" name="player1" type="text" class="validate" >
                <label for="joueur1">Joueur 1</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="joueur2" name="player2" type="text" class="validate">
                <label for="joueur2">Joueur 2</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Go</button>
            </div>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>


<?php require(__DIR__ . '/../base.php'); ?>