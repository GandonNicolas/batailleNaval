<?php ob_start(); ?>

<?php 
    if (!empty($errorMessage)) {
        echo('<div class="bg-danger text-center">' .$errorMessage. '</div>');
    } 
?>
<!-- Page Content goes here -->
<div class="row">
    <form class="col s12" method="POST" >
        <div class="row">
            <div class="col s12">
            
                <h2 class="teal-text text-lighten-1">Joueur 1</h2>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Porte-avion (5 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="porte-avion-debut-j1">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="porte-avion-fin-j1">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Croiseur (4 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="croiseur-debut-j1">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="croiseur-fin-j1">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Contre-torpilleurs (3 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="contre-torpilleurs-debut-j1">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="contre-torpilleurs-fin-j1">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Sous-marin (3 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="sous-marin-debut-j1">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="sous-marin-fin-j1">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Torpilleur (2 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="torpilleur-debut-j1">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="torpilleur-fin-j1">
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <h2 class="purple-text text-lighten-2">Joueur 2</h2>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Porte-avion (5 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="porte-avion-debut-j2">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="porte-avion-fin-j2">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Croiseur (4 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="croiseur-debut-j2">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="croiseur-fin-j2">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Contre-torpilleurs (3 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="contre-torpilleurs-debut-j2">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="contre-torpilleurs-fin-j2">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Sous-marin (3 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="sous-marin-debut-j2">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="sous-marin-fin-j2">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <p>Torpilleur (2 cases)</p>
            </div>
            <div class="input-field col s3">
                <input placeholder="Début" type="text" class="validate" name="torpilleur-debut-j2">
            </div>
            <div class="input-field col s3">
                <input placeholder="Fin" type="text" class="validate" name="torpilleur-fin-j2">
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="btn waves-effect waves-light indigo darken-4 pulse" type="submit" name="action">Go
                </button>
            </div>
        </div>
    </form>
</div>
<input type="checkbox" name="A1" id="A1" value="A1"> 
<label for="scales">Scales</label>
<div class="container mb-5">
    <div class="row">
        <div class="col s4 offset-s2 grid grid4">
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

            <div>1</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

            <div>2</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>3</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>4</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>5</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>6</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>7</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>8</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

            <div>9</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>


            <div>10</div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div> </div>

        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>


<?php require(__DIR__ . '/../base.php') ?>