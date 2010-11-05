<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?> show-grid">
  <div id="page" class="container-16 clear-block">
		<div id="menu-top" class="grid-16 clear-block">
				<div class="grid-5 suffix-4 alpha omega">&nbsp;xxxxxxxxxxxx</div>
				<div class="grid-5 prefix-2 omega"><?php
					if ($icons) { print $icons;} 
					if ($search_box) { print $search_box;} ?></div>
		</div>
    <div id="site-header" class="grid-16 clear-block">
      <div id="branding" class="grid-4 alpha">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      </div>

    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-9 prefix-3 omega">
        <?php print $main_menu_links; ?>
        <?php #print $secondary_menu_links; ?>
      </div>
    <?php endif; ?>


    </div>


    <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
    <?php if ($mission): ?>
      <div id="mission" class="<?php print ns('grid-14', $header, 7); ?>">
        <?php print $mission; ?>
      </div>
    <?php endif; ?>

    <?php if ($header): ?>
      <div id="header-region" class="region <?php print ns('grid-14', $mission, 7); ?> clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>
    
		<!--solo se muestra en el home-->
		<!--inicio del if-->
		
		<?php if ($is_front) { ?>
		<div id="slideshow" class="grid-16 clear-block"><?php print infoandina960_show_view_block('slideshow-block_1');?></div>
		<div id="messages" class="grid-16"><?php print $messages; ?></div>
		<div id="column-left" class="grid-7">
				<?php print infoandina960_show_view_block('noticias-block_1');?>
		</div>
		<div id="column-right" class="grid-8">
		<div id="column-right-top"></div>
			<div id="column-right-top-subcolumn-right" class="grid-5 alpha">
				<?php print infoandina960_show_view_block('recursos-block_1');?>
			</div>
			<div id="column-right-top-subcolumn-left" class="grid-3 omega"> xxxx</div>
		</div>

		<?php } else { ?> <!--inicio del else -->
	
		
    <div id="main" class="column <?php print ns('grid-16', $left, 4, $right, 3) . ' ' . ns('push-4', !$left, 4); ?>">
      <?php print $breadcrumb; ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region clear-block">
        <?php print $content; ?>
      </div>

      <?php print $feed_icons; ?>
    </div>

  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 3); ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
      <?php print $right; ?>
    </div>
  <?php endif; ?>

	<?php } ?> <!--fin del else -->

  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-14 clear-block">
        <?php print $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
