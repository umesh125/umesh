<?php
/*
 * @file User menu template
 */
 global $user;
?>
<div class="usermenus">
  <ul class="menu">
		<?php if($user->uid){ ?>
    <li class="first leaf active userloggle"><?php print t('Logged in as '); print $current_username;?><span></span></li>
    <li class="leaf"><?php print l(t('My Profile'),'profile/'.$user->name);?></li>
    <li class="leaf"><?php print l(t('My Content'),'users/'.$user->name.'/my-content');?></li>
    <li class="leaf"><?php print l(t("I'm Tracking..."),'users/'.$user->name.'/tracking');?></li>
    <li class="last leaf"><?php print l('Logout','user/logout');?></li>
    <?php } else { ?>
    <li class="first leaf active"><?php print l('Sign In/Sign Up','user/register', array('query' => drupal_get_destination()));?></li>
    <?php } ?>
  </ul>
</div>

