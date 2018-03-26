<?php include('partials/header.ui.php');?>
<?php include('partials/navbar.ui.php');?>
<div id="foundation" class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>API Reference</h1>
            <p>
                Anda dapat memulai membaca dokumentasi fungsi daei kelas-kelas yang disertakan dalam alitphp.
                Sempatkan juga waktu anda untuk memeriksa System Variables dan  juga Community Modules untuk informasi tambahan.
                <br/>
                Tips untuk membaca halaman ini: <i>Parameter yang berada dalam <code>[]</code> <i>(kurung siku) adalah parameter opsional, boleh diisi boleh tidak.</i>
            </p>
            <br>
            <br>
            <div class="col-sm-6">
                <div class="bs-component">
                    <div class="list-group">
                        <a href="<?php echo $this->baseurl('/apis/alit');?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Alit</h4>
                            <p class="list-group-item-text apis-desc">
                                Deskripsi tentang kegunaan kelas ini, lokasi file, namespace dan method yang tersedia
                            </p>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="<?php echo $this->baseurl('/apis/factory');?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Factory</h4>
                            <p class="list-group-item-text apis-desc">
                                Deskripsi tentang kegunaan kelas ini, lokasi file, namespace dan method yang tersedia
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- New col-6 -->
            <div class="col-sm-6">
                <div class="bs-component">
                    <div class="list-group">
                        <a href="<?php echo $this->baseurl('/apis/cache');?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Cache</h4>
                            <p class="list-group-item-text apis-desc">
                                Deskripsi tentang kegunaan kelas ini, lokasi file, namespace dan method yang tersedia
                            </p>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="<?php echo $this->baseurl('/apis/warehouse');?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Warehouse</h4>
                            <p class="list-group-item-text apis-desc">
                                Deskripsi tentang kegunaan kelas ini, lokasi file, namespace dan method yang tersedia
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.ui.php');?>