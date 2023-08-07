<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= Html::img('@root/img/logopariaman.jpeg', ['class' => 'img-circle user-panel']); ?>
                <!-- <img src="<= $directoryAsset ?>/img/pariamanlogo.png" class="img-circle" alt="User Image" /> -->
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->profile->full_name; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?php
        $roleName = Yii::$app->user->identity->role->name;
        if (Yii::$app->user->isGuest == false && $roleName == 'Super Admin') {
            $menu =  [
                [
                    'label' => 'Beranda',
                    'url' => ['/'], "icon" => "home",
                ],
                [
                    'label' => 'Pengaturan Tampilan',
                    'icon' => 'bars',
                    'url' => 'index',
                    "items" => [
                        ['label' => 'Halaman Statis', 'icon' => 'bars', 'url' => ['/statis-page']],
                        ['label' => 'Kategori Posting', 'icon' => 'tv', 'url' => ['/posting-kategori']],
                        ['label' => 'Kategori Tampilan', 'icon' => 'clipboard', 'url' => ['/kategori']],
                    ],
                ],
                // ['label' => 'Atribut Puskesmas', 'icon' => 'folder-open', 'url' => ['/atribut-puskesmas']],
                // ['label' => 'Data Instansi', 'icon' => 'bank', 'url' => ['/data-instansi']],

                [
                    'label' => 'Instansi',
                    'icon' => 'bank',
                    'url' => '#',
                    "items" => [
                        ['label' => 'Profil Instansi', 'icon' => 'bars', 'url' => ['/data-instansi']],
                        ['label' => 'Data Pegawai', 'icon' => 'address-card-o', 'url' => ['/data-pegawai']],
                        ['label' => 'Data Camat', 'icon' => 'address-card-o', 'url' => ['/data-camat']],

                    ],
                ],


                ['label' => 'Unggah Dokumen', 'icon' => 'cloud-upload', 'url' => ['/unggah-file']],

                ['label' => 'Pengaturan Menu', 'icon' => 'indent', 'url' => ['/menu-managemen']],
                ['label' => 'Pengaturan Slider', 'icon' => 'desktop', 'url' => ['/slider']],
                ['label' => 'Manajemen Posting', 'icon' => 'folder-open-o', 'url' => ['/posting']],
                ['label' => 'Manajemen User', 'icon' => 'users', 'url' => ['/user/admin']],
                ['label' => 'Profil User', 'icon' => 'user', 'url' => ['/user/profile']],
                ['label' => 'Info Akun', 'icon' => 'lock', 'url' => ['/user/account']],


            ];
        } elseif (Yii::$app->user->isGuest == false && $roleName == 'Admin Website') {
            $menu =  [
                [
                    'label' => 'Beranda',
                    'url' => ['/'], "icon" => "home",
                ],

                [
                    'label' => 'Instansi',
                    'icon' => 'bank',
                    'url' => '#',
                    "items" => [
                        ['label' => 'Profil Instansi', 'icon' => 'bars', 'url' => ['/data-instansi']],
                        ['label' => 'Data Pegawai', 'icon' => 'address-card-o', 'url' => ['/data-pegawai']],
                    ],
                ],


                ['label' => 'Unggah Dokumen', 'icon' => 'cloud-upload', 'url' => ['/unggah-file']],

                // ['label' => 'Pengaturan Menu', 'icon' => 'indent', 'url' => ['/menu-managemen']],
                ['label' => 'Pengaturan Slider', 'icon' => 'desktop', 'url' => ['/slider']],
                ['label' => 'Manajemen Posting', 'icon' => 'folder-open-o', 'url' => ['/posting']],
                // ['label' => 'Manajemen User', 'icon' => 'users', 'url' => ['/user/admin']],
                ['label' => 'Profil User', 'icon' => 'user', 'url' => ['/user/profile']],
                ['label' => 'Info Akun', 'icon' => 'lock', 'url' => ['/user/account']],


            ];
        }
        ?>


        <?= dmstr\widgets\Menu::widget([
            "items" => $menu
        ]) ?>



    </section>

</aside>