<style> <?php include_once 'menu.css'; ?> </style>
<style> <?php include_once 'menu.js'; ?> </style>
<div id="menu">

    <div class="avatar">
        <img class="avatar-img" src="src/assets/profile.png" alt="Avatar" align="middle"></img>
        <div class="middle">
        <div class="text"></div>
      </div>
    </div>

    <div class="list-group panel" id="sidebar">
        <a class="list-group-item collapsed" data-parent="#sidebar" data-toggle="collapse" href="#menu1">1</a>
        <div class="collapse" id="menu1">
            <a class="list-group-item" data-parent="#sidebar" href="javascript:void(0)">6</a>
        </div>
        <a class="list-group-item" data-parent="#sidebar" href="javascript:void(0)">2</a>
        <a class="list-group-item" data-parent="#sidebar" href="javascript:void(0)">3</a>
        <a class="list-group-item" data-parent="#sidebar" href="javascript:void(0)">4</a>
    </div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/myprofile">MyProfile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/decks">Decks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/groups">Grupos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/config">Settings</a>
        </li>
    </ul>

</div>