<!-- Start Header -->
	<header>Hai <a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a> | <a href="<?php echo base_url('login/logout') ?>" title="Logout">Logout</a></header>
    <!-- Start Nav -->
    <nav>
    	<ul>
        	<li><a href="<?php echo base_url('dasbor') ?>">Home</a></li>
            <li><a href="<?php echo base_url() ?>assets/post.html">Post</a></li>
            <li><a href="<?php echo base_url('index.php/user_controller/user') ?>">Update User</a></li>
            <li><a href="<?php echo base_url() ?>assets/templates.html">Profile</a></li>
        </ul>
    </nav>
    <!-- Start Article -->
    <article>
      <h1><?php echo 'Admin Control' ?></h1>