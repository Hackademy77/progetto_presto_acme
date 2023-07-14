<x-layout>
    <div class="container d-flex flex-column align-items-center justify-content-around login-card">
        <div class="row h-25 align-items-center">
            <h2>Registrati</h2>
        </div>
        <div class="row justify-content-center align-content-evenly w-100 h-75">
            <div class="col-12 col-md-6 w-100">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{route('register')}}">
                @csrf
                    <div class="mb-3 row justify-content-center">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                        <div class="mb-3 row justify-content-center">
                            <label for="password_confirmation" class="form-label">Conferma password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div><div class="d-flex justify-content-center"><button class="button-82-pushable mt-4" type="submit" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                            Registrati
                            </span>
                        </button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>



