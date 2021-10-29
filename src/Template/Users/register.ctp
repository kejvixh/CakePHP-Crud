<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
 <h1 class="text-center"><?= $this->Html->link('Already have an account? Log in here', ['controller' => 'users', 'action' => 'login']); ?></h1>
<?= $this->Form->create($user); ?>
<form>

    <div class="form-group">
        <?php echo $this->Form->control('firstname', ['class'=>'form-control', 'Placeholder'=>'First Name']); ?>   
    </div>

    <div class="form-group">
        <?php echo $this->Form->control('lastname', ['class'=>'form-control', 'Placeholder'=>'Last Name']); ?>  
    </div>

    <div class="form-group">
        <?php echo $this->Form->control('username', ['class'=>'form-control', 'Placeholder'=>'username']); ?>
    </div>

    <div class="form-group">
        <?php echo $this->Form->control('email', ['class'=>'form-control', 'Placeholder'=>'email']); ?>
    </div>
    
    <div class="form-group">  
        <?php echo $this->Form->control('password', ['class'=>'form-control', 'Placeholder'=>'password']); ?>
    </div>

    <div class="form-group">  
        <?php echo $this->Form->control('enc_password', ['class'=>'form-control', 'Placeholder'=>'enc_password']); ?>
    </div>
  
    <div class="form-group">
        <?= $this->Form->button(__('Register'), ['class'=>'btn btn-primary']); ?>
    </div>
  
 
</form>
<?= $this->Form->end(); ?>

