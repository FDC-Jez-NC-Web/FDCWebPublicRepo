<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
    <?php
    echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
    echo $this->Html->meta('icon', $this->Html->url('/img/message_icon.png'), ['type' => 'image/x-icon']);
    echo $this->Html->meta('shortcut icon', $this->Html->url('/img/message_icon.png'), ['type' => 'image/x-icon']); 
    ?>

    <?= $this->element('header_links') ?>
    <?php echo $this->Html->css('userStyle') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
         <?= $this->element('navbar') ?>
        <div id="container" class="d-flex justify-content-center align-items-center w-100" style="height:500px;"  >
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->fetch('js'); ?>

        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="   crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
        
    </body>
</html>
