<!-- need to remove -->

<li class="nav-item">
  <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
      <i class="nav-icon fas fa-tasks"></i>
      <p>Projets
      </p>
  </a>
</li>

<li class="nav-item">
    <a href="{{ route('task.index') }}" class="nav-link {{ Request::is('task.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>Tâches
        </p>
    </a>
</li>

