<div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->title }}</li>
        @endforeach
    </ul>
</div>
