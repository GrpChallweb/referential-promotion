<?php

require 'partials/head.php';

?>
<form action="create-promotion.php" method="post">
    <div class="form-group">
        <label for="libelle">Libellé</label>
        <input class="form-control" id="libelle" type="text" placeholder="Libellé de la promotion" name="libelle">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>
<?php

if(isset($_POST)) {
    if(isset($_POST['libelle'])) {
        (new Promotion())->create($_POST['libelle']);
    }
}

?>
</body>
</html>