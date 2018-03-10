<aside class="main-sidebar">

    <section class="sidebar">


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Entregas', 'icon' => 'file-code-o', 'url' => ['/beneficiarios']],
                    ['label' => 'Usuarios', 'icon' => 'user', 'url' => ['/debug']],
                    ['label' => 'Cerrar Sesión', 'icon' => 'poweroff', 'url' => ['/debug']],
                ],
            ]
        ) ?>

    </section>

</aside>
