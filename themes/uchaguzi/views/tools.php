<div id="tools-content">
	<div class="pageheader">
		<h1 class="pagetitle"><?php echo Kohana::lang('uchaguzi.tools'); ?></h1>
		<ul class="hornav">
			<?php foreach ($main_tabs as $page => $tab_name): ?>
			<li>
				<a href="<?php echo url::site(); ?>admin/<?php echo $page; ?>" <?php if($this_page==$page) echo 'class="active"' ;?>><?php echo $tab_name; ?></a>
			</li>
			<?php endforeach; ?>
			<?php foreach ($main_right_tabs as $page => $tab_name): ?>
			<li>
				<a href="<?php echo url::site(); ?>admin/<?php echo $page; ?>" <?php if($this_page==$page) echo 'class="active"' ;?>><?php echo $tab_name; ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div><!--pageheader-->

	<div class="page-content"> 
    	<div class="notibar announcement">
			<a class="close"></a>
			<?php echo $version_sync; ?>
			<?php echo $security_info; ?>
		</div> <!--notification announcement-->
				 
		<ul class="shortcuts">
			<li><a href="" class="reports"><span class="icon-pictures"></span><?php echo $reports_total .' '.Kohana::lang('ui_main.reports');?></a></li>
			<li><a href="" class="messages"><span class="icon-mail"></span><?php echo $message_count .' '.Kohana::lang('ui_main.messages');?></a></li>
			<li><a href="" class="published"><span class="icon-publish"></span><?php echo $reports_approved .' '.Kohana::lang('ui_main.approved');?></a></li>
			<li><a href="" class="verified"><span class="icon-checkmark-circle"></span><?php echo $reports_verified .' '.Kohana::lang('ui_main.verified');?></a></li>
		</ul>

		<div class="view-summary">
			<h3 class="sub-category">UCHAGUZI TASKS</h3>

			<article class="task cf">
				<hgroup>
					<h1><a href=""><?php echo Kohana::lang('ui_main.unverified');?></a></h1>
					<h2 class="desc"><?php echo Kohana::lang('ui_main.reports') .' '.Kohana::lang('ui_main.awaiting_verification');?></h2>
				</hgroup>
				<span class="total"><?php echo $reports_unverified;?></span>
			</article>

			<article class="task cf">
				<hgroup>
					<h1><a href=""><?php echo Kohana::lang('ui_main.not_approved');?></a></h1>
					<h2 class="desc"><?php echo Kohana::lang('ui_main.reports') .' '.Kohana::lang('ui_main.awaiting_approval');?></h2>
				</hgroup>
				<span class="total"><?php echo $reports_unapproved;?></span>
			</article>
        </div>            
    </div>
</div>
