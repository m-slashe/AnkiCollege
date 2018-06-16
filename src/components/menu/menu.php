<div id="app-menu">
    <?php include_once 'menu.css'; ?>
    <?php
        if (USE_DATABASE) {
            $id = $_SESSION['id'];
        } else {
            $id = 1;
        }
        $userDao = new UserDAO();
        $user = $userDao->getUserById($id);
        $_SESSION['user'] = $user;
    ?>
    <div class="container-fluid">
        <div class="row">
            <div id="menu">
                <div class="avatar-container">
                    <img class="img" src="<?php echo HOST ?>src/assets/avatars/1.png" alt="Avatar" align="middle"/>
                    <div class="middle">Escolher Imagem</div>
                </div>

                <div class="list-group panel" id="sidebar">
                    <a class="list-group-item list-group-item-dark" href="/profile">
                        <i class="fas fa-user-circle"></i> MyProfile
                    </a>
                    <?php
                    MenuCtrl::includeMenuComponent('Deck', $user->getDecks(), '<i class="fas fa-address-book"></i>');
                    MenuCtrl::includeMenuComponent('Grupo', $user->getGrupos(), '<i class="fas fa-users"></i>');
                    ?>
                    <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/config">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/index">
                        Card Test
                    </a>
                    <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/study">
                        Start
                    </a>
                </div>
            </div>
            <div class="controller-child">
                <?php Util::loadChild() ?>
            </div>
        </div>
    </div>
</div>
