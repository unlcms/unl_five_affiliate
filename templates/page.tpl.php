<?php if ($format !== 'partial'): ?>
<header class="dcf-header" id="dcf-header" role="banner">
    <!-- InstanceBeginEditable name="affiliateheaderglobal" -->
    <?php if (null !== theme_get_setting('affiliateheaderglobal') && !empty(trim(theme_get_setting('affiliateheaderglobal')))) : ?>
         <?php print theme_get_setting('affiliateheaderglobal'); ?>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="affiliateidm" -->
    <?php if (null !== theme_get_setting('affiliateidm') && !empty(trim(theme_get_setting('affiliateidm')))) : ?>
         <?php print theme_get_setting('affiliateidm'); ?>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="affiliatesearch" -->
    <?php print render($page['header']); ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/header-global-2.html"); ?>
    <!-- InstanceBeginEditable name="affiliatelogo" -->
    <?php if (null !== theme_get_setting('affiliatelogo') && !empty(trim(theme_get_setting('affiliatelogo')))) : ?>
         <?php print theme_get_setting('affiliatelogo'); ?>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/site-affiliation-1.html"); ?>
    <!-- InstanceBeginEditable name="affiliation" -->
        <?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/site-affiliation-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/site-title-1.html"); ?>
    <!-- InstanceBeginEditable name="titlegraphic" -->
        <?php if ($site_name): ?><a class="<?php print $site_name_class; ?>" href="<?php print $front_page; ?>"><?php print $site_name; ?></a><?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/site-title-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/logo-lockup-2.html"); ?>

    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html"); ?>
    <!-- InstanceBeginEditable name="affiliatemobilesearch" -->
    <?php if (module_exists('search')) : ?>
      <a class="dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-flex-grow-1 dcf-h-9 dcf-p-0 dcf-b-0 dcf-bg-transparent unl-scarlet" id="dcf-mobile-search-link" href="search/node">
        <svg class="dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current" aria-hidden="true" focusable="false" height="16" width="16" viewBox="0 0 24 24">
          <g class="dcf-nav-toggle-icon-open">
            <path d="M22.5 21.8L15 14.3c1.2-1.4 2-3.3 2-5.3 0-4.4-3.6-8-8-8S1 4.6 1 9s3.6 8 8 8c2 0 3.9-.8 5.3-2l7.5 7.5c.2.2.5.2.7 0 .2-.2.2-.5 0-.7zM9 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7z"></path>
          </g>
          <g class="dcf-nav-toggle-icon-close dcf-d-none">
            <path d="M20.5 4.2L4.2 20.5c-.2.2-.5.2-.7 0-.2-.2-.2-.5 0-.7L19.8 3.5c.2-.2.5-.2.7 0 .2.2.2.5 0 .7z"></path>
            <path d="M3.5 4.2l16.3 16.3c.2.2.5.2.7 0s.2-.5 0-.7L4.2 3.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7z"></path>
          </g>
        </svg>
        <span class="dcf-nav-toggle-label dcf-mt-1 dcf-txt-2xs">Search</span>
      </a>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="affiliatemobileidm" -->
    <?php if (null !== theme_get_setting('affiliatemobileidm') && !empty(trim(theme_get_setting('affiliatemobileidm')))) : ?>
         <?php print theme_get_setting('affiliatemobileidm'); ?>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/nav-menu-1.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/nav-toggle-btn.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/nav-menu-child-1.html"); ?>
    <!-- InstanceBeginEditable name="navlinks" -->
        <?php print render($page['navlinks']); ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/nav-menu-child-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/nav-menu-2.html"); ?>

    <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
</header>

<main class="dcf-main" id="dcf-main" role="main" tabindex="-1">
    <!-- InstanceBeginEditable name="highlighted" -->
    <?php print render($page['highlighted']); ?>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="hero" -->
    <div class="dcf-hero <?php if (array_key_exists('field_unl_hero_size', $node_view)): ?>unl-hero-notch-stripe dcf-d-flex dcf-flex-row dcf-flex-wrap dcf-mb-6 unl-bg-darker-gray<?php else: ?>dcf-hero-default<?php endif; ?><?php if ($unl_hide_page_title): ?> dcf-sr-only<?php endif; ?>">
    <!-- InstanceEndEditable -->
        <div class="dcf-hero-group-1">
            <div class="dcf-breadcrumbs-wrapper">
                <nav class="dcf-breadcrumbs" id="dcf-breadcrumbs" role="navigation" aria-label="breadcrumbs">
                    <!-- InstanceBeginEditable name="breadcrumbs" -->
                    <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
                    <!-- InstanceEndEditable -->
                </nav>
            </div>
            <header class="dcf-page-title" id="dcf-page-title">
                <!-- InstanceBeginEditable name="pagetitle" -->
                <?php print render($title_prefix); ?>
                <?php if (array_key_exists('field_unl_hero_subhead1', $node_view)): ?><?php print render($node_view['field_unl_hero_subhead1']); ?><?php endif; ?>
                <?php if (array_key_exists('field_unl_hero_title', $node_view)): ?><?php print render($node_view['field_unl_hero_title']); ?><?php elseif ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                <?php if (array_key_exists('field_unl_hero_subhead2', $node_view)): ?><?php print render($node_view['field_unl_hero_subhead2']); ?><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- InstanceEndEditable -->
            </header>
            <!-- InstanceBeginEditable name="herogroup1" -->
            <!-- InstanceEndEditable -->
        </div>
        <!-- InstanceBeginEditable name="herogroup2" -->
        <div class="dcf-hero-group-2<?php if (array_key_exists('field_unl_hero_size', $node_view)): ?> dcf-w-100% <?php print render($node_view['field_unl_hero_size']); ?><?php endif; ?>">
            <?php if (array_key_exists('field_unl_hero_image', $node_view)): ?><?php print render($node_view['field_unl_hero_image']); ?><?php endif; ?>
            <?php if (array_key_exists('field_unl_hero_photo_credit', $node_view)): ?><?php print render($node_view['field_unl_hero_photo_credit']); ?><?php endif; ?>
        </div>
        <!-- InstanceEndEditable -->
    </div>
    <div class="dcf-main-content dcf-wrapper">
    <!-- InstanceBeginEditable name="maincontentarea" -->
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php endif; ?>
    <?php print render($page['content_top']); ?>

    <?php if ($unl_remove_inner_wrapper): ?><div class="dcf-bleed"><?php endif; ?>

        <?php if ($page['sidebar_first'] xor $page['sidebar_second']): ?>
        <div class="dcf-grid dcf-col-gap-vw">
        <?php elseif ($page['sidebar_first'] && $page['sidebar_second']) : ?>
        <div class="dcf-grid-thirds@md dcf-col-gap-vw">
        <?php endif; ?>

        <?php if($page['sidebar_first']): ?>
        <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>

        <?php if (!isset($page['sidebar_first']['#region']) && isset($page['sidebar_second']['#region'])): ?>
          <div class="dcf-col-100% dcf-col-67%-start@md">
            <?php print render($page['content']); ?>
          </div>
        <?php elseif (isset($page['sidebar_first']['#region']) && !isset($page['sidebar_second']['#region'])): ?>
          <div class="dcf-col-100% dcf-col-67%-end@md">
            <?php print render($page['content']); ?>
          </div>
        <?php else: ?>
        <?php print render($page['content']); ?>
        <?php endif; ?>

        <?php if($page['sidebar_second']): ?>
        <?php print render($page['sidebar_second']); ?>
        <?php endif; ?>

        <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
        </div>
        <?php endif; ?>

    <?php if ($unl_remove_inner_wrapper): ?></div><?php endif; ?>

    <?php print render($page['content_bottom']); ?>
<?php if ($format !== 'partial'): ?>
    <!-- InstanceEndEditable -->
    </div>

</main>
<footer class="dcf-footer" id="dcf-footer" role="contentinfo">
    <!-- InstanceBeginEditable name="contactinfo" -->
    <?php if (null !== theme_get_setting('contactinfo') && !empty(trim(theme_get_setting('contactinfo')))) : ?>
         <?php print theme_get_setting('contactinfo'); ?>
    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php require(DRUPAL_ROOT . "/wdn/templates_5.3/includes/global/noscript.html"); ?>
</footer>
<?php endif; ?>
