<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="/img/sejarah.jpg" alt="Komik Shelf" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h1 class="display-5 text-danger mb-3">Buku Sejarah</h1>
            <p class="lead">Selamat datang di <strong>Aplikasi Buku Sejarah</strong>, sebuah platform sederhana untuk mengelola koleksi buku sejarah favoritmu seperti Walisongo,
                Majapahit, dan lainnya..</p>
            <p>Aplikasi ini dibuat dengan <strong>CodeIgniter 4</strong> dan menyediakan fitur CRUD lengkap, di
                antaranya:</p>
            <ul>
                <li>📥 Tambah buku sejarah baru lengkap dengan cover, penulis, dan penerbit</li>
                <li>🔍 Lihat detail buku sejarah yang menarik</li>
                <li>✏️ Edit informasi buku kapan saja</li>
                <li>🗑️ Hapus buku sejarah yang tidak dibutuhkan</li>
            </ul>
            <p>Aplikasi ini cocok untuk latihan pemrograman, tugas sekolah, atau bahkan menjadi
                sistem katalog koleksi pribadi bagi pecinta sejarah dan literatur.</p>
            <a href="/books" class="btn btn-danger mt-3">Lihat Koleksi Buku Sejarah</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>