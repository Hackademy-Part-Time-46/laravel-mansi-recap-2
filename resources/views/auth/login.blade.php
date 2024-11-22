@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">

    <button type="submit">Entra</button>
</form>
