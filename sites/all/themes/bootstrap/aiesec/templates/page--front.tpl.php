<div class="siteContainer">
    <header id="navbar" role="banner" class="navbar navbar-inverse "> 
        <div class="navbar-inner">
            <div class="container">
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <?php if (!empty($logo)): ?>
                    <a class="logo span3" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>

                <?php if (!empty($site_name)): ?>
                    <h1 id="site-name">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
                    </h1>
                <?php endif; ?>

                <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                    <div class="nav-collapse collapse span9">
                        <div class="row">
                            <div class="span9">
                                <div class="pull-right">
                                    <a href="#"><?php print t('Login'); ?></a> | <a href="#"><?php print t('Register'); ?></a>
                                </div>
                            </div>
                            <div class="span9">
                                <nav role="navigation" class="pull-right">
                                    <?php if (!empty($primary_nav)): ?>
                                        <?php print render($primary_nav); ?>
                                    <?php endif; ?>

                                    <?php if (!empty($page['navigation'])): ?>
                                        <?php print render($page['navigation']); ?>
                                    <?php endif; ?>
                                </nav>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <div class="highlighted_slider">
        <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted_container"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
    </div>
    <div class="main-container container">

        <header role="banner" id="page-header">
            <?php if (!empty($site_slogan)): ?>
                <p class="lead"><?php print $site_slogan; ?></p>
            <?php endif; ?>

            <?php print render($page['header']); ?>
        </header> <!-- /#header -->

        <div class="row-fluid">



            <section class="<?php print _bootstrap_content_span($columns); ?>">  

                <?php
                if (!empty($breadcrumb)): print $breadcrumb;
                endif;
                ?>
                <a id="main-content"></a>

                <?php print $messages; ?>
                <?php if (!empty($tabs)): ?>
                    <?php print render($tabs); ?>
                <?php endif; ?>
                <?php if (!empty($page['help'])): ?>
                    <div class="well"><?php print render($page['help']); ?></div>
                <?php endif; ?>
                <?php if (!empty($action_links)): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <div class="row-fluid">
                    <?php if (!empty($page['homepage_section_1'])): ?>
                        <div class="<?php print empty($page['homepage_section_2']) ? 'span12' : 'span6'  ?>">
                            <?php print render($page['homepage_section_1']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($page['homepage_section_2'])): ?>
                        <div class="<?php print empty($page['homepage_section_1']) ? 'span12' : 'span6'  ?>">
                            <?php print render($page['homepage_section_2']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <?php if (!empty($page['sidebar_second'])): ?>
                <aside class="span3" role="complementary">
                    <div class="well"> <?php print render($page['sidebar_second']); ?></div>
                </aside>  <!-- /#sidebar-second -->
            <?php endif; ?>

        </div>
    </div>
</div>
<footer class="footer container">
    <?php print render($page['footer']); ?>
</footer>
