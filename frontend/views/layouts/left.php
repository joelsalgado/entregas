<aside class="main-sidebar">

    <section class="sidebar">

        <?php if(Yii::$app->user->id): ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Entregas', 'icon' => 'file-code-o', 'url' => ['/beneficiarios']],
                    ['label' => 'Usuarios', 'icon' => 'user', 'url' => ['/user'],
                        'visible' => $user = (Yii::$app->user->identity->role == 30 || Yii::$app->user->identity->role == 20) ? true : false],
                    ['label' => 'Cerrar Sesión', 'icon' => 'power-off', 'url' => ['/site/logout'],
                        'template' => '<a href="{url}" data-method="post"><span class="glyphicon glyphicon-off"></span>{label}</a>'
                    ],
                ],
            ]
        ) ?>
        <?php endif; ?>

    </section>

</aside>
