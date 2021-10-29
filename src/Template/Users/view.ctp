<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">

   

<div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">First Name</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->firstname) ?>" readonly="">
  </fieldset>

  <div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Last Name</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->lastname) ?>" readonly="">
  </fieldset>

  <div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Username</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->username) ?>" readonly="">
  </fieldset>

  <div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Email</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->email) ?>" readonly="">
  </fieldset>

  <div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Password</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->password) ?>" readonly="">
  </fieldset>

  <div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Enc_Password</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?= h($user->enc_password) ?>" readonly="">
  </fieldset>

 
</div>
<?= $this->Html->link(__('Back'), ['action' => 'index'], ['class'=>'btn  btn-primary ']) ?>
</div>
