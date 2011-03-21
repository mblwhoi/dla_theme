<?php
// $Id: page.tpl.php,v 1.1.2.5 2010/04/08 07:02:59 sociotech Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $setting_styles; ?>
  <!--[if IE 8]>
  <?php print $ie8_styles; ?>
  <![endif]-->
  <!--[if IE 7]>
  <?php print $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  <?php print $ie6_styles; ?>
  <![endif]-->
  <?php print $local_styles; ?>
  <?php print $scripts; ?>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">

    <!-- top bar -->
    <div id="top-bar-wrapper" class="top-bar-wrapper full-width">
      <div id="top-bar" class="top-bar row <?php print $grid_width; ?>">
        <div id="top-bar-inner" class="top-bar-inner inner clearfix">
         <a href="http://www.whoi.edu" class="whoi-home-link" alt="Woods Hole Oceanographic Institution Home"></a>
        </div>
      </div>
    </div>

  <div id="page" class="page">
    <div id="page-inner" class="page-inner">
      <div id="skip">
        <a href="#main-content-area"><?php print t('Skip to Main Content Area'); ?></a>
      </div>
        

    <!-- banner -->
    <div id="banner-wrapper" class="banner-wrapper full-width">
      <div id="banner" class="banner row <?php print $grid_width; ?>">
        <div id="banner-map">
          <a class="dla-link" href="/dla" alt="WHOI Data Library and Archives"><span class="link-text">WHOI Data Library and Archives</span></a>
          <a class="mblwhoi-link" href="http://www.mblwhoilibrary.org" alt="MBLWHOI Library"><span class="link-text">MBLWHOI Library</span></a>
        </div>
      </div>
    </div>


    <!-- nav bar -->
    <!-- NOTE: MENU CLASSES MUST BE SYNCHRONIZED WITH THE DLA FRONT PAGE MENU CLASSES FOR EASE OF MANAGEMENT -->
    <div id="nav-bar-wrapper" class="nav-bar-wrapper full-width">
      <div id="nav-bar" class="nav-bar row <?php print $grid_width; ?>">
        <div id="nav-bar-inner" class="nav-bar-inner inner clearfix">

<ul id="dla-nav-menu" class="menu dla-nav-menu sf-menu">

 <li class="about">
  <a href="/dla" title="About the WHOI Data Library &amp; Archives">ABOUT &#x25BC;</a>


<ul class="dla-about-menu">
<li><a href="/dla/mission">Mission</a></li>
<li><a href="/dla/location-and-hours">Location and Hours</a></li>
<li><a href="/dla/staff">Staff</a></li>
<li><a href="/dla/volunteers">Volunteers and Volunteering</a></li>
<li><a href="/dla/contact">Contact the DLA</a></li>
</ul>
  </li>

 <li class="data">
    <a href="/dla/data" title="WHOI Data in the DLA">DATA &#x25BC;</a>

<ul class="dla-data-menu">
<li><a href="/cruises">Cruise Data</a></li>
<li><a href="/historical_data">Historical Data</a></li>
<li><a href="/dla/data/seawater-temperatures">Historical Woods Hole Seawater Temperatures</a></li>
<li><a href="/dla/data/light-ship">Light Ship and Light Station Data</a></li>
<li><a href="/dla/data/other-resources">Other Data Resources</a></li>
</ul>
  </li>

  <li class="archives">
    <a href="/dla/archives" title="WHOI Archives">ARCHIVES &#x25BC;</a>
  
<ul class="dla-archives-menu">
<li><a href="/dla/archives/photographs" title="Photographs">Photographs</a></li>
<li><a href="/whoi_av" title="Audio and Video">Audio and Video Recordings</a></li>
<li><a href="/manuscripts" title="WHOI Manuscript Collections">WHOI Manuscript Collections</a></li>
<li><a href="/oral_histories" title="Oral histories from members of the Woods Hole community">Oral Histories</a></li>
<li><a href="/dla/archives/other-resources" title="Other resources related to archives">Other Archives Resources</a></li>
</ul>

  </li>

  <li class="whoi-publications">
    <a href="/dla/whoi-publications" title="WHOI Publications">WHOI PUBLICATIONS &#x25BC;</a>

<ul class="dla-whoi-publications-menu">
<li><a href="/dla/whoi-publications/whoi-bibliography" title="Bibliography of scientific publications of the WHOI community, 1930 - present">WHOI Bibliography</a></li>
<li><a href="/ndsf_bibliography/" title="Bibliography of publications related to the National Deep Submergence Facility">NDSF Bibliography</a></li>
<li><a href="/dla/whoi-publications/whoi-technical-reports" title="WHOI Technical Reports">WHOI Technical Reports</a></li>
<li><a href="/dla/whoi-publications/mit-whoi-theses" title="MIT/WHOI Joint Program">MIT/WHOI Joint Program Theses</a></li>
<li><a href="/dla/whoi-publications/other-resources" title="Other WHOI Publication Resources">Other WHOI Publication Resources</a></li>
</ul>

  </li>


  <li class="reference">
    <a href="/dla/reference" title="WHOI Reference">REFERENCE &#x25BC;</a>

<ul class="dla-whoi-reference-menu">
<li><a href="/cruises" title="WHOI Cruises">WHOI Cruises</a></li>
<li><a href="/ships" title="WHOI-Affiliated Ships and Other Platforms">Ships and Other Platforms Affiliated with WHOI</a></li>
<li class=""><a href="/dla/reference/other-resources" title="Other Reference Resources">Other Reference Resources</a></li>
</ul>  

  </li>


  <li class="contact">
    <a href="/dla/contact" title="Contact the Data Library and Archives">CONTACT</a>
  </li>

</ul>


        </div>
      </div>
    </div>
    
    <!-- main row: width = grid_width -->
    <div id="main-wrapper" class="main-wrapper full-width">
     <div id="main" class="main row <?php print $grid_width; ?>">
      <div id="main-inner" class="main-inner inner clearfix">

        <!-- Preface -->
        <div id="preface-wrapper" class="preface-wrapper full-width">
             <div id="preface" class="preface row nested">
               <div id="preface-inner" class="preface-inner inner">
                 <?php if ($breadcrumb || $help || $messages): ?>
                   <?php print theme('grid_block', $breadcrumb, 'breadcrumb'); ?>
                   <?php print theme('grid_block', $help, 'content-help'); ?>
                   <?php print theme('grid_block', $messages, 'content-messages'); ?>
                  <?php endif; ?>
                 </div><!-- /preface-inner -->
               </div><!-- /preface -->
            </div><!-- /preface-wrapper -->

           <!-- main group: width = grid_width -->
            <div id="main-group" class="main-group row nested <?php print $grid_width ?>">
              <div id="main-group-inner" class="main-group-inner inner">
                <div id="main-content" class="main-content row nested">
                  <div id="main-content-inner" class="main-content-inner inner"


                    <!-- left sidebar -->
                    <?php print theme('grid_row', $left, 'left', 'nested', $left_width); ?>

                    <!-- content group: width = grid_width - (left_width + right_width) -->
                    <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
                        <div id="content-region" class="content-region row nested">
                          <div id="content-region-inner" class="content-region-inner inner">


           <div id="header-wrapper" class="header-wrapper">
             <div id="header" class="header">
               <div id="header-inner" class="header-inner inner">
                 <?php print $header ?>
               </div>
             </div>
           </div>


                            <a name="main-content-area" id="main-content-area"></a>
                            <?php print theme('grid_block', $tabs, 'content-tabs'); ?>
                            <div id="content-inner" class="content-inner block">
                              <div id="content-inner-inner" class="content-inner-inner inner">
                                <?php if ($title): ?>
                                <h1 class="title"><?php print $title; ?></h1>
                                <?php endif; ?>
                                <?php if ($content): ?>
                                <div id="content-content" class="content-content">
                                  <?php print $content; ?>
                                  <?php print $feed_icons; ?>
                                </div><!-- /content-content -->
                                <?php endif; ?>
                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->
                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->

                    <?php print theme('grid_row', $right, 'right', 'nested', $right_width); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

      <!-- footer row: width = grid_width -->
      <?php print theme('grid_row', $footer, 'footer', 'full-width', $grid_width); ?>

      <!-- footer-message row: width = grid_width -->
      <div id="footer-message-wrapper" class="footer-message-wrapper full-width">
        <div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
          <div id="footer-message-inner" class="footer-message-inner inner clearfix">
            <?php print theme('grid_block', $footer_message, 'footer-message-text'); ?>
          </div><!-- /footer-message-inner -->
        </div><!-- /footer-message -->
      </div><!-- /footer-message-wrapper -->

    </div><!-- /page-inner -->
  </div><!-- /page -->

    <!-- bottom bar -->
    <div id="bottom-bar-wrapper" class="bottom-bar-wrapper full-width">
      <div id="bottom-bar" class="bottom-bar row <?php print $grid_width; ?>">
        <div id="bottom-bar-inner" class="bottom-bar-inner inner clearfix">
        </div>
      </div>
    </div>

  <?php print $closure; ?>


  <!-- login div -->
  <div id="mblwhoi-login" class="mblwhoi-login">
    <?php if ($logged_in): ?>
      <a href="<?php print $base_path . 'logout';?>">Logout</a>
    <?php endif; ?>
    <?php if (! $logged_in):?>
      <a href="<?php print $base_path . 'user/login';?>">Login</a>
    <?php endif; ?>
  </div>

</body>
</html>
