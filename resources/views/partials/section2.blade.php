<section >
    <h1>Section 2 : Males</h1>
    <div class="section-1">
        @foreach ($males as $membre )
        @if ($membre->genre == 'Homme')
            <p class="genre-male">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


    
    
</section>