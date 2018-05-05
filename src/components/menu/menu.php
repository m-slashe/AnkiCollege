<style> <?php include_once 'menu.css'; ?> </style>
<div id="menu">

    <div class="avatar">
        <img class="avatar-img" src="src/assets/profile.png" alt="Avatar" align="middle"/>
    </div>

    <div class="list-group panel" id="sidebar">
        <a class="list-group-item list-group-item-dark" href="/profile">
            <i class="fas fa-user-circle"></i> MyProfile
        </a>
        <a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#decks">
            <i class="fas fa-address-book"></i> Decks <span class="badge badge-dark badge-pill">1</span>
        </a>
        <div class="collapse" id="decks">
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="/deck/1">Deck1</a>
        </div>
        <a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#grupos">
            <i class="fas fa-users"></i> Grupos <span class="badge badge-dark badge-pill">2</span>
        </a>
        <div class="collapse" id="grupos">
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="/group/1">
                Grupo1
            </a>
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="/group/2">
                Grupo2
            </a>
        </div>
        <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/config">
            <i class="fas fa-cog"></i> Settings
        </a>
        <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/index">
            Card Test
        </a>
        <a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#forms">
            FORMS <span class="badge badge-dark badge-pill">3</span>
        </a>
        <div class="collapse" id="forms">
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="formUser">
                User Form
            </a>
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="formGroup">
                Group Form
            </a>
            <a class="list-group-item list-group-item-dark subitem" data-parent="#sidebar" href="formUserGroup">
                User Group Form
            </a>
        </div>
    </div>
</div>