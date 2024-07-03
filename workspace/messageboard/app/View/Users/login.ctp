
<div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card p-4 shadow-sm">
                <div id="validation-messages"></div>
                <?php echo $this->Form->create('User', array(
                    'id' => 'loginForm',
                    'url' => array('controller' => 'users', 'action' => 'login'),
                    'class' => 'needs-validation',
                    'novalidate' => true
                )); ?>
                    <h2 class="text-uppercase mb-2 text-danger fw-bold">Login</h2>
                    <p class="opacity-50 x mb-4" style="font-size:12px;">Please input all the required fields</p>
                    <div class="form-group mb-3">
                        <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email', 'required' => true, 'label' => false)); ?>
                    </div>
                    <div class="form-group mb-3">
                        <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => true, 'label' => false)); ?>
                    </div>
                    <div class="d-grid">
                        <?php echo $this->Form->button('SUBMIT', array('type' => 'submit', 'class' => 'btn btn-success btn-block fw-bold')); ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
</div>

