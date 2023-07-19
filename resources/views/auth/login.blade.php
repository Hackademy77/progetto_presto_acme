<x-layout>
    <x-navbar/>
    
    
    <div class="container col-12 col-md-6 d-flex flex-column align-items-center justify-content-around login-card rounded">
        <div class="row py-3 align-items-center">
            <h2>{{__('ui.login')}}</h2>
        </div>
        <div class="row w-100">
            <div class="col-12 col-md-8 w-100">
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
                    <div class="mb-3 text-center d-flex flex-column align-items-center">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="w-50 rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 text-center d-flex flex-column align-items-center">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="w-50 rounded-pill text-center" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button class="btn-cardz btn-one rounded mt-4" type="submit" role="button">
                        <span class=""></span>
                        <span class=""></span>
                        <span class="">
                        {{__('ui.loginbtn')}}
                        </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>