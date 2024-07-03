<!-- navbar.ctp -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold text-uppercase text-danger " href="/users/dashboard">
        <i class="bi bi-chat-square-quote-fill"></i>
            Message
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                
                <?php if ($this->Session->check('Auth.User.id')): ?>
                  
                  
                    <li class="nav-item dropdown">
                        
                        <span class="nav-link dropdown-toggle fw-bold text-uppercase text-primary d-flex align-items-center gap-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo h($this->Session->read('Auth.User.username')); ?>
                        <img src="<?php echo $this->Session->read('Auth.User.image') ? '/img/uploads/' . h($this->Session->read('Auth.User.image')) : '/img/default_image.png'; ?>" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                    </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'details'), array('class' => 'dropdown-item text-uppercase fw-bold')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Change password', array('controller' => 'users', 'action' => 'change_password'), array('class' => 'dropdown-item text-uppercase fw-bold')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Change email', array('controller' => 'users', 'action' => 'change_email'), array('class' => 'dropdown-item text-uppercase fw-bold')); ?>
                            </li>
                        </ul>
                        </li>
                    <li class="nav-item">
                    <?php echo $this->Html->link(
                        '<i class="fa-solid fa-power-off"></i>',
                        array('controller' => 'users', 'action' => 'logout'),
                        array('class' => 'nav-link', 'escape' => false)
                    ); ?>
                    </li>
                 
                <?php else: ?>
                    <li class="nav-item">
                        <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), array('class' => 'nav-link fw-bold text-uppercase')); ?>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register'), array('class' => 'nav-link fw-bold text-uppercase')); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
