<?php

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>

  <body<?php print $body_class ?>>

    <!-- Layout -->
    <?php if (!$hide_header) { ?>
    <div id="toppanel">
      <div id="panel">
       <?php print $slider ?>
        <div id="slider-left">
          <?php if ($slider_left) print $slider_left; ?>
        </div>
         <div id="slider-right">
          <?php if ($slider_right) print $slider_right; ?>
        </div>
        <div id="slider-middle">
          <?php if ($slider_middle) print $slider_middle; ?>
        </div>
      </div> <!-- /login -->
      <div id="toppanel-head">
        <div id="go-home">
          <?php if (isset($go_home)) print $go_home; ?>
        </div>
        
        <?php if (!$hide_panel) { ?>
        <div id="header-title" class="clearfix">
          <ul id="toggle"><li><?php print $panel_navigation ?></li></ul>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
    
    
    <div id="page-wrapper"><div id="page-wrapper-content">
      <?php print $header ?>
      <div id="navigation" class="clearfix<?php print $rootcandy_navigation_class ?>">
      
      	<div id='logo' class='clear-block'>
		    <div class='logo'>
		    	<a href="<?php echo check_url($front_page); ?>"><img title="Open Government Platform (OGPL)" src="<?php print $logo; ?>" alt="logo" /></a>
		    </div>
		    <div class="header-anounced-text">The National Data Portal Beta</div>
		    <div class="searchPan"></div>
  		</div>
  		<br/>
        <?php print $rootcandy_navigation ?>
      </div>
      
      

      <div id="breadcrumb" class="alone">
        <?php print $breadcrumb; ?>
      </div>
      <div id="menu">
        <?php print $header_top; ?>
      </div>
      
      
      <div id="admin-links">
          <?php echo $user_link; ?>
          <?php /* if (isset($rootcandy_user_links)) print $rootcandy_user_links */?>
        </div>
        <div class="main-title">
        <?php if ($title): print '<h2 id="title">'. $title .'</h2>'; endif; ?>
      </div>
      
      <div id="content-wrap">
        <div id="inside">
          <?php if ((arg(0) == 'admin' AND (arg(2))) || $admin_left) { ?>
            <div id ="sidebar-left">
              <?php
              print $admin_left;
              ?>
            </div>
          <?php } ?>
          <?php if ($admin_right) { ?>
            <div id ="sidebar-right">
              <?php
              print $admin_right;
              ?>
            </div>
          <?php } ?>
          <div id="content">
            <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr"><div class="content-in">
              <?php
                // TODO
                // $menu_sublinks = menu_navigation_links('navigation', 3);
                // if ($menu_sublinks) {
                //  print theme('links', $menu_sublinks, array('id' => 'rootcandy-menu'));
                // }
              ?>
              <?php if (isset($tabs) && $tabs): print '<div id="tabs-primary"><ul class="tabs primary">'. $tabs .'</ul></div><div class="level-1 clear-block">'; endif; ?>
              <?php if (isset($tabs2) && $tabs2): print '<div id="tabs-secondary"><ul class="tabs secondary">'. $tabs2 .'</ul></div><div class="level-2 clear-block">'; endif; ?>
              <?php
                //dashboard
                if (isset($dashboard)) {
              ?>
                <div id="dashboard" class="clearfix">
                  <div id="dashboard-left">
                    <?php print $dashboard_left ?>
                  </div>
                  <div id="dashboard-right">
                    <?php print $dashboard_right ?>
                  </div>
                </div>
              <?php
                }
                else {
                  print $help;
                  print $messages;
                }
              ?>
              <?php
                if (!$hide_content) {
                  print $content;
                }
              ?>
              <?php if (isset($tabs2) && $tabs2): print '</div>'; endif; ?>
              <?php if (isset($tabs) && $tabs): print '</div>'; endif; ?>
            </div><br class="clear" /></div></div></div></div></div></div></div></div>
          </div>
        </div>
      </div>
      
      
      <div id='footer'>
  		<hr class="footer-hr"></hr>
  		<?php if ($footer_message): ?><div class='footer-message'><?php print $footer_message ?></div><?php endif; ?>
    	<div class="footer-admin-poweredby">
  		<a href="<?php echo variable_get('powerby_image_url', NULL); ?>" alt="<?php echo variable_get('powerby_title', NULL); ?>" target="_blank">
	 		<img title="<?php echo variable_get('powerby_title', NULL); ?>" src="<?php echo variable_get('powerby_image', NULL); ?>" />
		</a>
  	</div>
    	<?php print $footer; ?> 
  	</div>
    </div></div>
    <br/>
    <!-- /layout -->
    <?php print $closure ?>
    <br/>
  </body>
</html>
