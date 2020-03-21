<ul class="menu">
    <a href="{{ route('user-index') }}">
        <li @if ($active==="users") class='active' @endif>
            <i class="material-icons">person</i>
            Usuários
        </li>
    </a>
    <a href="{{ route('user-index') }}">
        <li @if ($active==="teams") class='active' @endif>
            <i class="material-icons">people_alt</i>
            Equipes
        </li>
    </a>
    <a href="{{ route('problems-index') }}">
        <li @if ($active==="problems") class='active' @endif>
            <i class="material-icons">code</i>
            Problemas
        </li>
    </a>
    <a href="{{ route('user-index') }}">
        <li @if ($active==="rank") class='active' @endif>
            <i class="material-icons">emoji_events</i>
            Ranking
        </li>
    </a>
</ul>
