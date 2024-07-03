<div class=" mt-5" style="width:700px;">
    <div class="card">
        <div class="card-header bg-success text-white text-uppercase fw-bold">User Profile</div>
        <div class="card-body d-flex flex-column ">
            <?php
                // Build avatar URL
                if (!empty($user['User']['image'])) {
                    $avatarUrl = '/img/uploads/' . $user['User']['image']; 
                } else {
                    $avatarUrl = '/img/default_image.png';
                }
            ?>
            <img class="profile-picture mx-auto d-block mb-3" src="<?php echo htmlspecialchars($avatarUrl); ?>" alt="Profile Picture">
            
            <div class="card p-4 mt-2 shadow">
                <div class=" d-flex">
                    <div class="col-sm-2 opacity-75">Name:</div>
                    <div class="col-sm-4 fw-bold font-italic"><?php echo htmlspecialchars($user['User']['name']); ?></div>
                </div>
                <div class="d-flex w-100">
                    <div class="col-sm-2 opacity-75">Email:</div>
                    <div class="col-sm-4 fw-bold font-italic"><?php echo htmlspecialchars($user['User']['email']); ?></div>
                </div>
                <div class="d-flex">
                    <div class="col-sm-2 opacity-75">Birthdate:</div>
                    <div class="col-sm-4 fw-bold font-italic"><?php echo htmlspecialchars($user['User']['birthdate']) ?></div>
                </div>
                <div class="d-flex">
                    <div class="col-sm-2 opacity-75">Gender:</div>
                    <div class="col-sm-4 fw-bold font-italic"><?php echo htmlspecialchars($user['User']['gender']) ?></div>
                </div>
                <div class="d-flex">
                    <div class="col-sm-2 opacity-75">Hobby:</div>
                    <div class="col-sm-4 fw-bold font-italic"><?php echo htmlspecialchars($user['User']['hobby'])?></div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <!-- Edit Profile Button -->
                <div class="d-flex justify-content-end mt-4">
                    <?php
                        echo $this->Html->link('Edit Profile', array('controller' => 'Users', 'action' => 'profile'), array('class' => 'btn btn-success text-uppercase'));
                    ?>
                </div>
    
                <!-- Back to Dashboard Button -->
                <div class="text-center mt-3">
                    <a href="/users/dashboard" class="btn btn-primary ">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
