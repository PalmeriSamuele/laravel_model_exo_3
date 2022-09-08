<section >
    <h1>Section 1</h1>
    <div class="section-1">
        @foreach ($membres as $membre )
        @if ($membre->genre == 'Femme')
            <p class="genre-female">{{$membre->nom}} {{$membre->age}}</p>
           
        @endif
        @if ($membre->genre == 'Homme')
            <p class="genre-male">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


    
    
</section>