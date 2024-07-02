<!-- navbar.ctp -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase text-danger" href="/users/dashboard">Message-Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                
                <?php if ($this->Session->check('Auth.User.id')): ?>
                    <li class="nav-item d-flex align-items-center">
                    <span class="nav-link fw-bold text-uppercase text-danger">
                        <img src="<?php echo $this->Session->read('Auth.User.image') ? '/img/uploads/' . h($this->Session->read('Auth.User.image')) : '/img/default_image.png'; ?>" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                       <?php echo h($this->Session->read('Auth.User.username')); ?>
                    </span>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear-fill"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'details'), array('class' => 'dropdown-item')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Change password', array('controller' => 'users', 'action' => 'change_password'), array('class' => 'dropdown-item')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Change email', array('controller' => 'users', 'action' => 'change_email'), array('class' => 'dropdown-item')); ?>
                            </li>
                        </ul>
                        </li>
                    <li class="nav-item">
                    <?php echo $this->Html->link(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>',
                        array('controller' => 'users', 'action' => 'logout'),
                        array('class' => 'nav-link', 'escape' => false)
                    ); ?>
                   

                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), array('class' => 'nav-link')); ?>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register'), array('class' => 'nav-link')); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
