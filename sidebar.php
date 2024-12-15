<div class="col-md-2 sidebar p-0">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-info text-white">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">PT Bendi Car</span>
        </a>
        <hr>
        <!-- Tambahkan ini di dalam ul class="nav nav-pills flex-column mb-auto" -->
<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
<li>
    <a href="/modules/admin/index.php" class="nav-link text-white">
        Manajemen User
    </a>
</li>
<?php endif; ?>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-white">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="modules/mobil/index.php" class="nav-link text-white">
                    Manajemen Mobil
                </a>
            </li>
            <li>
                <a href="modules/pelanggan/index.php" class="nav-link text-white">
                    Manajemen Pelanggan
                </a>
            </li>
            <li>
                <a href="modules/transaksi/index.php" class="nav-link text-white">
                    Transaksi
                </a>
            </li>
        </ul>
    </div>
</div>