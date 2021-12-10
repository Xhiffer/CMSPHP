<h1>Titre <?= $test[2]; ?></h1>
<h3>Auteur : <?= $test[1]; ?></h3>
<h3>date de sortie : <?= $test[3]; ?></h3>
<h3> contenue : <?= $test[4]; ?></h3>



<!-- need dates-->
<h1>Commentaires : </h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">ajouter Commentaire</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <a onclick="$postManager->createPost('commentaire','hihi')" type="button" class="btn btn-primary">Primary</a>
</form>
<hr>
<?php $arr = array(1, 2, 3, 4,5); ?>
<?php foreach($arr as $key=>$value): ?>
        <h2><?= $key; ?><h2>
        <p>lballablalblbalblablbalbal<p>
        <br>
    <?php endforeach; ?>

