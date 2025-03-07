<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Lume Escritório de Contabilidade
    </title>

    <?= $this->Html->script('jquery.js'); ?>
    <?= $this->Html->css('jsvectormap.min.css') ?>
    <?= $this->Html->script('config.js'); ?>
    <?= $this->Html->css('vendor.min.css') ?>
    <?= $this->Html->css('app.min', ['id' => 'app-style']) ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('bootstrap-datepicker.min.css') ?>
    <?= $this->Html->css('style.css'); ?>


    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidenav-menu">
            <a href="#" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><?= $this->Html->image('logo.png'); ?></span>
                    <span class="logo-sm"><?= $this->Html->image('icone.png'); ?></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><?= $this->Html->image('logo.png'); ?></span>
                    <span class="logo-sm"><?= $this->Html->image('icone.png'); ?></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>
                <ul class="side-nav">
                    <li class="side-nav-title">Menu</li>

                    <li class="side-nav-item">
                        <a href="index.html" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#ferramentas" aria-expanded="false" aria-controls="ferramentas" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-tool"></i></span>
                            <span class="menu-text"> Ferramentas </span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ferramentas">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="<?= $this->Url->build(['controller' => 'Ferramentas', 'action' => 'markup']) ?>" class="side-nav-link">
                                        <span class="menu-text">Markup Tributário</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#usuarios" aria-expanded="false" aria-controls="usuarios" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-users"></i></span>
                            <span class="menu-text"> Usuários </span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="usuarios">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="side-nav-link">
                                        <span class="menu-text">Listar Usuários</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'adicionar']) ?>" class="side-nav-link">
                                        <span class="menu-text">Adicionar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Brand Logo -->
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><?= $this->Html->image('logo.png'); ?></span>
                            <span class="logo-sm"><?= $this->Html->image('icone.png'); ?></span>
                        </span>

                        <span class="logo-dark">
                            <span class="logo-lg"><?= $this->Html->image('logo.png'); ?></span>
                            <span class="logo-sm"><?= $this->Html->image('icone.png'); ?></span>
                        </span>
                    </a>

                    <button class="sidenav-toggle-button px-2">
                        <i class="ti ti-menu-2 fs-24"></i>
                    </button>

                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ti ti-menu-2 fs-24"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center gap-2">

                    <!-- Search for small devices -->
                    <div class="topbar-item d-flex d-xl-none">
                        <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <i class="ti ti-search fs-22"></i>
                        </button>
                    </div>

                    <!-- Light/Dark Mode Button -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-22"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item nav-user">
                        <div class="dropdown">
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">
                                <?= $this->Html->image('profile.png', ['width' => 32, 'class' => 'rounded-circle me-lg-2 d-flex', 'alt' => 'Perfil']); ?>
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h5 class="my-0">Lucas Heideric</h5>
                                    <h6 class="my-0 fw-normal">Desenvolvedor</h6>
                                </span>
                                <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="align-middle">Minha Conta</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item fw-semibold">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span class="align-middle">Sair</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->
    </div>

    <div class="page-content">
        <div class="page-container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>

    <footer>
        <?= $this->Html->script('vendor.min.js'); ?>
        <?= $this->Html->script('app.js'); ?>
        <?= $this->Html->script('apexcharts.min.js'); ?>
        <?= $this->Html->script('jsvectormap.min.js'); ?>
        <?= $this->Html->script('world-merc.js'); ?>
        <?= $this->Html->script('inputmask.js'); ?>
        <?= $this->Html->script('maskMoney.js'); ?>

        <script>
            $(document).ready(function() {
                var config = sessionStorage.getItem('__Flacto_CONFIG__');
                var tema = config ? JSON.parse(config) : {};

                // Se não houver um tema, definimos o padrão como 'light'
                var currentTheme = tema && tema.theme ? tema.theme : 'light';

                // Ajusta o ícone com base no tema atual
                if (currentTheme === 'dark') {
                    $('#light-dark-mode').find('.ti').removeClass('ti-moon').addClass('ti-sun');
                } else {
                    $('#light-dark-mode').find('.ti').removeClass('ti-sun').addClass('ti-moon');
                }

                $('#light-dark-mode').click(function() {
                    currentTheme = (currentTheme === 'dark') ? 'light' : 'dark';

                    if (currentTheme === 'dark') {
                        $(this).find('.ti').removeClass('ti-moon').addClass('ti-sun');
                    } else {
                        $(this).find('.ti').removeClass('ti-sun').addClass('ti-moon');
                    }

                    tema.theme = currentTheme;
                    sessionStorage.setItem('__Flacto_CONFIG__', JSON.stringify(tema));
                    localStorage.setItem('__Flacto_CONFIG__', JSON.stringify(tema));
                });
            });
        </script>



    </footer>
</body>

</html>