        <!-- Main Frame -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Kategori : <?= $judulh1['nama_kategori']; ?></h1>
                    <div class="row">
                        <?php if ($this->session->flashdata('flash')) {
                            echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('flash') . '</p>';
                        } ?>
                        <div class="col-lg">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($products as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><img src="<?= base_url('assets/images/produk/') . $p['gambar']; ?>" alt="poster" width="75px"></td>
                                            <td><?= $p['nama_produk']; ?></td>
                                            <td>Rp. <?php echo number_format($p['harga'], 0, ",", "."); ?></td>
                                            <td><?= $p['stok']; ?></td>
                                            <td><?= $p['keterangan']; ?></td>
                                            <td><?= $p['kategori']; ?></td>
                                            <td>

                                                <?= anchor('keranjang/tambah/' . $p['id_produk'], '<div class="badge bg-success"><i class="fa-solid fa-cart-plus"></i> Add to Cart</div>') ?>
                                                <a href="<?= base_url('products/edit/') . $p['id_produk']; ?>" class="badge bg-primary"><i class="fas fa-pen-to-square"></i> Edit</a>
                                                <a href="<?= base_url('products/hapus/') . $p['id_produk']; ?>" class="badge bg-danger"><i class="fas fa-trash-can"></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
