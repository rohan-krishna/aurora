<ul class="list-group">
    <a href="{{ route('auroraUsersIndex') }}" class="list-group-item list-group-item-action {{ request()->is('users') ? 'active' : '' }}">All Users</a>
    <a href="{{ route('auroraUserCreate') }}" class="list-group-item list-group-item-action {{ request()->is('users/create') ? 'active' : '' }}">Add New User</a>
</ul>