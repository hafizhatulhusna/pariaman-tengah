<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu ml-auto">

            <ul class="nav navbar-nav d-flex flex-row">
                
                <!-- Tasks: style can be found in dropdown.less -->
                
                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href=" " class="pull-right">
                        <span class="hidden-xs">
                            <?= Html::a(
                                'Log Out',
                                //fa fa-fw fa-sign-out
                                ['/site/logout'],
                                [
                                    'icon'=>'fa fa-fw fa-sign-out',
                                    'data-method' => 'post', 'class' => 'btn btn-primary',
                                ]
                            ) ?>
                        </span>
                        
                    </a>
                </li>
                <!-- <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<//?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><//?= Yii::$app->user->identity->profile->full_name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image 
                        <li class="user-header">
                            <img src="<//?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <//?= Yii::$app->user->identity->profile->full_name; ?> 
                                <small><//?= Yii::$app->user->identity->role->name?></small>
                            </p>
                        </li>
                        <!-- Menu Footer
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <//?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
