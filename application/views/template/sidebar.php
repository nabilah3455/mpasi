<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('dashboard') ?>"><i class="sidebar-item-icon fa fa-home"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">MAIN MENU</li>
            <li <?= $this->uri->segment(1) == 'berita' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('berita'); ?>"><i class="sidebar-item-icon fa fa-newspaper-o"></i>
                    <span class="nav-label">Berita MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'admin/bahan_mpasi' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('admin/bahan_mpasi'); ?>"><i class="sidebar-item-icon fa fa-cutlery"></i>
                    <span class="nav-label">Bahan MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'admin/menu_mpasi' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('admin/menu_mpasi'); ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Menu MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'admin/kalkulator_mpasi' ? 'class="active"' : ''; ?>>
                <a href=<?= base_url('admin/kalkulator_mpasi'); ?>><i class="sidebar-item-icon fa fa-calculator"></i>
                    <span class="nav-label">Kalkulator MPASI</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->