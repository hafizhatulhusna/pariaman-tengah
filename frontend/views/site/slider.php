<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Slider;

$imageRoot = Yii::getAlias('@root').'/img';
?>

<div class="slider-container light rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}">
        <ul>
            <?php 
                $getSlider = Slider::find()->all();
                foreach ($getSlider as $row) {
                     //echo Html::img($root_folder.$row->slider_image);
                     // echo Url::to('@root/upload/ekinerjawebsite.jpg')

            ?>
                <li data-transition="fade">
                    <img src="<?= Url::to('@root/'.$row->slider_image.'')?>"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        data-kenburns="on"
                        data-duration="9000"
                        data-ease="Linear.easeNone"
                        data-scalestart="150"
                        data-scaleend="100"
                        data-rotatestart="0"
                        data-rotateend="0"
                        data-offsetstart="0 0"
                        data-offsetend="0 0"
                        data-bgparallax="0"
                        class="rev-slidebg">

                    <div class="tp-caption"
                        data-x="180"
                        data-y="188"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"><img src="<?= $imageRoot.'/slides/slide-title-border-light.png'?>" alt=""></div>

                    <div class="tp-caption top-label"
                        data-x="227"
                        data-y="180"
                        data-start="500"
                        data-transform_in="y:[-300%];opacity:0;s:500;"><?= $row->text_bagian_atas ?></div>

                    <div class="tp-caption"
                        data-x="600"
                        data-y="188"
                        data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;"><img src="<?= $imageRoot.'/slides/slide-title-border-light.png'?>" alt=""></div>

                    <div class="tp-caption main-label"
                        data-x="200"
                        data-y="210"
                        data-start="1500"
                        data-whitespace="nowrap"                         
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-mask_in="x:0px;y:0px;"><?= $row->text_utama ?></div>

                    <div class="tp-caption bottom-label"
                        data-x="230"
                        data-y="280"
                        data-start="2000"
                        data-transform_in="y:[100%];opacity:0;s:500;"><?= $row->text_bagian_bawah ?></div>
                    
                </li>

            <?php } ?>
        </ul>
    </div>
</div>

