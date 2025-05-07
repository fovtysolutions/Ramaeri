<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
          <a href="<?= base_url() ?>" class="logo-dark">
               <img src="<?php echo base_url(!empty($setting->logo) ? $setting->logo : 'assets/images/logo-sm.png') ?>" class="logo-sm" alt="logo sm">
               <img src="<?php echo base_url(!empty($setting->logo) ? $setting->logo : 'assets/images/logo-dark.png') ?>" class="logo-lg" alt="logo dark">
          </a>

          <a href="<?= base_url() ?>" class="logo-light">
               <img src="<?php echo base_url(!empty($setting->logo) ? $setting->logo : 'assets/images/logo-sm.png') ?>" class="logo-sm" alt="logo sm">
               <img src="<?php echo base_url(!empty($setting->logo) ? $setting->logo : 'assets/images/logo-light.png') ?>" class="logo-lg" alt="logo light">
          </a>
     </div>

     <!-- Menu Toggle Button (sm-hover) -->
     <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
          <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
     </button>


    <div class="scrollbar col-xxl-3" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">
            <?php
                $request = \Config\Services::request();
                $uri = service('uri');
                $route = $uri->getSegment(1);
                $menuItems = [];

                $session = session();
                                
                $roots = ROOTPATH . 'inc/core';
                if (file_exists($roots)) {
                    $modulesPath = $roots . '/';
                    $modules = scandir($modulesPath);

                    foreach ($modules as $module) {
                        if ($module === '.' || $module === '..' || $module === 'Home')
                            continue;

                        $configPath = $modulesPath . $module . '/Config.php';
                        if (file_exists($configPath)) {
                            $config = require($configPath);
                            if (isset($config['position'])) {
                                $menuItems[] = $config;
                            }
                        }
                    }

                    usort($menuItems, function ($a, $b) {
                        return $a['position'] <=> $b['position'];
                    });

                    foreach ($menuItems as $config):
                        ?>
                        <?php if (!empty($config['menu']) && is_array($config['menu']) && !empty($config['menu']['sub_menu']) && is_array($config['menu']['sub_menu'])): ?>
                            <li class="nav-item <?= $route == $config['id'] ? 'mm-active' : '' ?>">
                                <a class="nav-link menu-arrow" href="#<?= $config['id'] ?>" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="<?= $config['id'] ?>">
                                    <span class="nav-icon">
                                        <i class="<?= $config['icon'] ?>"></i>
                                    </span>
                                    <span class="nav-title"><?= $config['name'] ?></span>
                                </a>
                                <div class="collapse" id="<?= $config['id'] ?>">
                                    <ul class="nav sub-navbar-nav">
                                        <?php foreach ($config['menu']['sub_menu'] as $submenu): ?>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="<?= base_url($submenu['id']) ?>"><?= $submenu['name'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                        <?php elseif (!empty($config['menu']) && is_array($config['menu'])): ?>
                            <li class="nav-item <?= $route == $config['id'] ? 'mm-active' : '' ?>">
                                <a class="nav-link" href="<?= base_url($config['id']) ?>">
                                    <span class="nav-icon">
                                        <i class="<?= $config['icon'] ?>"></i>
                                    </span>
                                    <span class="nav-title"><?= $config['name'] ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach;
                }
            ?>
        </ul>  
    </div>
</div>
<!--end::Sidebar-->