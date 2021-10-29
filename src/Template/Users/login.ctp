<div class="login-form">
<?= $this->Form->create();?>   
    <form>
        <h2 class="text-center">Log in</h2>   
         
        <div class="form-group">
            <?= $this->Form->input('email', ['class'=>'form-control', 'required'=>'required', 'Placeholder'=>'username'])?>
        </div>
        <div class="form-group">
          <?= $this->Form->input('password', ['class'=>'form-control', 'required'=>'required', 'Placeholder'=>'Password'])?>
        </div>
        <div class="form-group">
        <?= $this->Form->submit(('Login'), ['class'=>'btn btn-primary']); ?>
        </div>
        
        </div>        
    </form>
    

    <p class="text-center"><?= $this->Html->link('Create an account', ['controller' => 'users', 'action' => 'register']); ?></p>
</div>