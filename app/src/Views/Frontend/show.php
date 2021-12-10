<h1><?= $test; ?></h1>


<!-- need dates-->
<h1>Commentaires : </h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">ajouter Commentaire</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<hr>
<?php $arr = array(1, 2, 3, 4,5); ?>
<?php foreach($arr as $key=>$value): ?>
        <h2><?= $key; ?><h2>
        <p>lballablalblbalblablbalbal<p>
        <br>
    <?php endforeach; ?>

