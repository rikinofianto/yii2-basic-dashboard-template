<?php
use app\widgets\CMenu;
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <?php
            echo CMenu::widget([
                'encodeLabels' => false,
                'options' => [
                    'class' => 'nav nav-pills nav-sidebar flex-column',
                    'data-widget' => 'treeview',
                    'role' => 'menu',
                    'data-accordion' => 'false'
                ],
                'items' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => '<i class="nav-icon fas fa-tachometer-alt"></i>',
                        'url' => ['index'],
                        'icon' => 'tachometer-alt',
                        'options' => ['class' => 'nav-item'],
                    ],
                    [
                        'label' => 'Sub Example <i class="right fas fa-angle-left"></i>',
                        'url' => ['#'],
                        'icon' => 'th',
                        'options' => ['class' => 'nav-item'],
                        'items' => [
                            [
                                'label' => 'About',
                                'url' => ['about'],
                                'options' => ['class' => 'nav-item'],
                            ],
                            [
                                'label' => 'Login Page',
                                'icon' => 'user',
                                'url' => ['login'],
                                'options' => ['class' => 'nav-item'],
                            ],
                        ]
                    ],
                ],
            ]);
        ?>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
