</br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">is Admin</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach($test as $key=>$value): ?>
    <tr>
      <th scope="row"><?= $key; ?></th>
      <td><?= $value[0]; ?></td>
      <td><?= $value[1]; ?></td>
      <td><?= $value[0]; ?>.<?= $value[1]; ?></td>
      <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" checked  disabled></td>
      <td>Delete User</td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>