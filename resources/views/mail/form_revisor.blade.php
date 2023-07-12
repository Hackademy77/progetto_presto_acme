<x-layout>
<div>
    <h2 class="text-center">Candidati come Revisore</h2>
</div>
<div class="container">
    <h2>Inserisci i tuoi dati</h2>
    <form method="POST" action="{{ route('become.revisor') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</x-layout>