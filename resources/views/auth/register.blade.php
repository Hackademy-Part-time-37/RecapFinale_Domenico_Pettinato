<x-layout>
    <x-navbar />
    <div class="col-12  mt-3 d-flex justify-content-center">
        <H1>
            Registrazione
        </H1>
    </div>

    <!-- validazione della registrazione -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{route('register')}}" class="form">
        @csrf
        <div class="container">
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <p>Inserisci i tuoi dati per creare un account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Full Name" name="name" id="Name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="password_confirmation"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" id="password_confirmation" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
        </div>
    </form>
</x-layout>