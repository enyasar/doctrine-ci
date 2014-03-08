<?php if ($user = Current_User::user()): ?>
	Hello, <em><?php echo $user->username; ?></em> <br/>
	<?php echo anchor('logout', 'Logout'); ?>
<?php else: ?>
	<?php echo anchor('login','Login'); ?> |
	<?php echo anchor('signup', 'Register'); ?>		
<?php endif; ?>