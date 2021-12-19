@if (isset($errors) && $errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
@endif
@if (session('success'))
    <p class="text-success">{{ session('success') }}</p>
@endif
