<x-layout>
<div>
    <h2 class="text-center">Candidati come Revisore</h2>
</div>
<div class="container">
    <form method="POST" action="{{ route('become.revisor') }}">
        @csrf

        <div>
            <h3>
                Benvenuto <span class="text-success">{{$user->name}}</span>
            </h3>
        </div>

        <div>
            <p>
                Inserisci un messaggio per chiedere di diventare revisore.
            </p>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</x-layout>