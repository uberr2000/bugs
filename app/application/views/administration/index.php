<h3>
	<?php echo __('tinyissue.administration'); ?>
	<span><?php echo __('tinyissue.administration_description'); ?></span>
</h3>

<div class="pad">

	<table class="table">
		<tr>
			<th><a href="administration/users"><?php echo __('tinyissue.total_users'); ?></a></th>
			<td><?php echo $users; ?></td>
		</tr>
		<tr>
			<th><a href="projects"><?php echo ($active_projects < 2) ? __('tinyissue.active_project') : __('tinyissue.active_projects'); ?></a></th>
			<td><?php echo ($active_projects == 0) ? __('tinyissue.no_one') : $active_projects; ?></td>
		</tr>
		<tr>
			<th><a href="projects?status=0"><?php echo ($archived_projects < 2) ? __('tinyissue.archived_project') : __('tinyissue.archived_projects'); ?></a></th>
			<td><?php echo ($archived_projects == 0) ? __('tinyissue.no_one') : $archived_projects; ?></td>
		</tr>
		
		<tr>
			<th><a href="<?php echo URL::to('tags'); ?>"><?php echo __('tinyissue.tags'); ?></a></th>
			<td><?php echo $tags; ?></td>
		</tr>
		<tr>
			<th><a href="<?php echo URL::to('roles'); ?>"><?php echo __('tinyissue.role'); ?>s</a></th>
			<td><?php echo @$roles; ?></td>
		</tr>
		<tr>
			<th><?php echo __('tinyissue.open_issues'); ?></th>
			<td><?php echo $issues['open']; ?></td>
		</tr>
		<tr>
			<th><?php echo __('tinyissue.closed_issues'); ?></th>
			<td><?php echo $issues['closed']; ?></td>
		</tr>
		<tr>
			<th>Tiny Issue <?php echo __('tinyissue.version'); ?></th>
			<td>v<?php echo Config::get('tinyissue.version'); ?></td>
		</tr>
		<tr>
			<th><?php echo __('tinyissue.version_release_date'); ?></th>
			<td><?php echo $release_date = Config::get('tinyissue.release_date'); ?></td>
		</tr>
	</table>

</div>
<div class="pad2">
	<?php
		include "../app/application/libraries/checkVersion.php";
		echo '<h4>'.__('tinyissue.version_check').' : ';
		if ($verActu == $verNum) {
			echo __('tinyissue.version_good').'!</h4>';
		} else {
			echo '<a href="install/update.php">'.__('tinyissue.version_need').'.</a></h4>';
			echo __('tinyissue.version_your').' : '.$verActu.'<br />';
			echo __('tinyissue.version_disp').' : '.$verNum.'<br />';
			echo __('tinyissue.version_commit').' : '.$verCommit.'<br />';
			echo '<a href="https://github.com/pixeline/bugs/releases" target="_blank">'.__('tinyissue.version_details').'</a> <br />';
		}
		echo '<br /><br />';
	?>
</div>
