<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\DataInstansi;
use backend\models\MenuManagemen;

$dataInstansi = DataInstansi::find()->one();
$imageRoot = Yii::getAlias('@root').'/img';

?>

<header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': false}">
    
    <div class="header-body">

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="index.html">
                            <img alt="Dinas Kecamatan Pariaman Tengah" width="280" height="90" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= $imageRoot.'/parteng.png'?>">
                            <!-- <?php // echo Html::img($imageRoot.'/dikporahitam.png',['title'=>'Dinas Pendidikan Pemuda dan Olahraga'],['alt'=>'Dinas Pendidikan Pemuda dan Olahraga']); ?> -->
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <ul class="header-extra-info hidden-xs">
                        <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none"><?= $dataInstansi->no_wa ?></h4>
                                    <p><small>Hubungi Kami</small></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none"><?= $dataInstansi->email ?></h4>
                                    <p><small>Kirimkan email kepada kami</small></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
            <div class="container">
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
                            <?php 
                                $menu = (new MenuManagemen)->getDataMenu();
                                $i = 0;
                                foreach ($menu as $row) { 
                                    //hitung jumlah sub menu dari menu parent
                                    $submenu = (new MenuManagemen)->getDataSubmenu($row->menu_id); 
                                    //jika sub menu lebih besar dari 0 maka tamplilkan sebmenu dalam ul      
                                    
                                    if (count($submenu) > 0) { 
                                        echo '<li class="dropdown">';
                                            echo Html::a($row->menu_nama,[$row->menu_item],['class'=>'dropdown-toggle']);
                                            echo '<ul class="dropdown-menu">';
                                                    foreach ($submenu as $sub) {
                                                        if($sub->menu_type=='link'){ 
                                                            echo '<li>'.Html::a($sub->menu_nama,$sub->menu_item).'</li>';
                                                        }else if($sub->menu_type=='post'){ 
                                                            echo '<li>'.Html::a($sub->menu_nama,['site/view-post','id_post'=>$sub->menu_item]).'</li>'; 
                                                        }else if($sub->menu_type=='category'){ 
                                                            echo '<li>'.Html::a($sub->menu_nama,['/site/view-category','id_category'=>$sub->menu_item]).'</li>';
                                                        }else if($sub->menu_type=='statis_page'){ 
                                                            echo '<li>'.Html::a($sub->menu_nama,['/site/view-page','id_page'=>$sub->menu_item]).'</li>';
                                                        }
                                                    }
                                                echo '</ul>';
                                        echo '</li>';  
                                  }else{
                                        if($row->menu_type=='link'){
                                            echo '<li>'.Html::a($row->menu_nama,$row->menu_item).'</li>';
                                        }else if($row->menu_type=='post'){ 
                                            echo '<li>'.Html::a($row->menu_nama,['site/view-post','id_post'=>$row->menu_item]).'</li>'; 
                                        }else if($row->menu_type=='category'){ 
                                            echo '<li>'.Html::a($row->menu_nama,['/site/view-category','id_category'=>$row->menu_item]).'</li>';
                                        }else if($row->menu_type=='statis_page'){ 
                                            echo '<li>'.Html::a($row->menu_nama,['/site/view-page','id_page'=>$row->menu_item]).'</li>';
                                        }
                                    }
                                }  
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

