<div class="w-50 card " style="margin-top: 100px; margin-left:200px; margin-right:200px; padding:20px; margin-top:150px;">
    <h2 class="text-danger"><?php echo __('REGISTER'); ?></h2>
    <p class="opacity-50 mb-4" style="font-size:12px;">Please input all the required fields</p>
    <div id="validation-messages"></div>
    <?php echo $this->Form->create('User', array('id' => 'registerForm', 'class' => 'needs-validation', 'novalidate' => true)); ?>
         <div>
            <div class="form-group mb-3 ">
                <?php echo $this->Form->input('name', array('class' => 'form-control ', 'label' => 'Name (5-20 characters)', 'required' => true)); ?>
            </div>
            <div class="form-group mb-3">
                <?php echo $this->Form->input('username', array('type' => 'text', 'class' => 'form-control', 'label' => 'Username', 'required' => true)); ?>
            </div>
            <div class="form-group mb-3">
                <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control', 'label' => 'Email address', 'required' => true)); ?>
            </div>
            <div class="form-group mb-3">
                <?php echo $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'label' => 'Password', 'required' => true)); ?>
            </div>
            <div class="form-group mb-3">
                <?php echo $this->Form->input('confirm_password', array('type' => 'password', 'class' => 'form-control', 'label' => 'Confirm Password', 'required' => true)); ?>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"><?php echo __('SUBMIT'); ?></button>
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
