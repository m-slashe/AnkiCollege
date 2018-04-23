<style> <?php include_once 'menu.css'; ?> </style>
<div id="menu">

    <div class="avatar">
        <img class="avatar-img" src="src/assets/profile.png" alt="Avatar" align="middle"></img>
        <div class="middle">
        <div class="text"></div>
      </div>
    </div>

    <div class="list-group panel" id="sidebar">
        <a class="list-group-item list-group-item-dark" href="/profile">MyProfile</a>
        <a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#decks">Decks</a>
        <div class="collapse" id="decks">
                    <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/deck/1">Deck1<span class="badge badge-primary badge-pill">1</span></a>
                </div>
        <a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#grupos">Grupos</a>
        <div class="collapse" id="grupos">
                    <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/group/1">Grupo1</a>
                </div>
        <a class="list-group-item list-group-item-dark" data-parent="#sidebar" href="/config">Settings</a>
    </div>
</div>