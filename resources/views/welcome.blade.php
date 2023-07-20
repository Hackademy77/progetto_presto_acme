<x-layout>

    <x-header />

    <x-categorygrid />

    <div class="container my-5"> 
    <h2 class="text-center">{{__('ui.latestarticles')}}</h2>
    <div class="row d-flex justify-content-evenly">
    @foreach($items as $item)
    
    <x-card 
        :item="$item"
    />
    @endforeach
    </div>

    <div class="container" id="mySection">
            <div class="row justify-content-center cst-contatori">
                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Since:</h5> <span id="counter1"></span> 
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="">
                        <h5>Visualizzazioni: </h5><span id="counter2"></span> 
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Clienti: </h5> <span id="counter3"></span>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

</x-layout>