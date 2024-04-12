<h2>Exercice 6</h2>


    <p>
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un
        tableau de valeurs.<br>
        Exemple :<br>
        $elements = array("Monsieur","Madame","Mademoiselle");
        alimenterListeDeroulante($elements);
    </p>

    <select>
        <label >Civilité</label>
            <?php
                $el = array("Mademoiselle", "Madame", "Monsieur", "   ");

                alimenterListeDeroulante($el);

                function alimenterListeDeroulante($array) {
                    foreach($array as $value) {
                    echo '<option value="'.strtolower($value).'">' .$value.'</option>';
                    }
                }
            ?>
     </select>
 

