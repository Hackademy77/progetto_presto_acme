<x-layout>
    <div class="container d-flex flex-column align-items-center justify-content-around login-card">
        <div class="row h-25 align-items-center">
            <h2>Accedi</h2>
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
                <form method="post" action="{{route('login')}}">
                @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                        <div class="d-flex justify-content-center"><button class="button-82-pushable mt-4" type="submit" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                            Accedi
                            </span>
                        </button></div>
                        
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>