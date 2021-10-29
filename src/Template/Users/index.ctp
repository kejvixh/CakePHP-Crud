<div class="row">
<h2>All Users List</h2>

<?= $this->Html->link(__('Add New User'), ['action' => 'add'], ['class'=>'btn  btn-primary ']) ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Enc_password</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php if (!empty($users)):?>
      <?php foreach($users as $user):?>
        <tr>
        <td><?= h($user->id) ?></td>
          <td><?= h($user->firstname) ?></td>
          <td><?= h($user->lastname) ?></td>
          <td><?= h($user->username) ?></td>
          <td><?= h($user->email) ?></td>
          <td><?= h($user->password) ?></td>
          <td><?= h($user->enc_password) ?></td>
          <td><?= $this->Html->link('View',['action'=>'view', $user->id], ['class'=>'btn btn-primary']) ?></td>
          <td><?= $this->Html->link('Edit',['action'=>'edit', $user->id], ['class'=>'btn btn-success']) ?></td>
          <td><?= $this->Form->postLink('Delete',['action'=>'delete', $user->id], ['class'=>'btn btn-danger'], ['confirm'=>'Are you sure?']) ?></td>
        </tr>
      <?php endforeach;?>
    <?php else: ?>
        <tr>
        <td>No Records Found!</td>
        </tr>
    <?php endif ?>
  </tbody>
</table>
</div>


