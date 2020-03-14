<ul class="menu">
    <li @if ($active==="users") class='active' @endif>
        <i class="material-icons">person</i>
        Usuários
    </li>
    <li @if ($active==="teams") class='active' @endif>
        <i class="material-icons">people_alt</i>
        Equipes
    </li>
    <li @if ($active==="problems") class='active' @endif>
        <i class="material-icons">code</i>
        Problemas
    </li>
    <li @if ($active==="rank") class='active' @endif>
        <i class="material-icons">emoji_events</i>
        Ranking
    </li>
</ul>
