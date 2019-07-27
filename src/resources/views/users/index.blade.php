<h3>Users List</h3>

<ul>
    @foreach($users as $user)
    <li>
        {{ $user->name }}
    </li>
    @endforeach
</ul>