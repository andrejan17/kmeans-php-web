<nav class="container-navbar">
    <div class="content-navbar">
        <div class="nav-header">
            <a class="nav-brand" href="index.php">SMANCIS</a>
        </div>
        <div class="nav-collapse">
            <ul class="nav-nav">
            <?php
                $ambil=$koneksi->query("SELECT * FROM admin");
                $pecah=$ambil->fetch_assoc();
            ?>
                <li><a href="kriteria.php">Kriteria</a></li>
                <li><a href="data.php">Data</a></li>
                <li><a href="tentangkmeans.php">Tentang K-Means</a></li>
                <li><a href="ubahpass.php?&id=<?php echo $pecah['id_admin']; ?>">Ubah Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>