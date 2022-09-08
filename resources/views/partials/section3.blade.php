<section >
    <h1>Section 3 : Females</h1>
    <div class="section-1">
        @foreach ($females as $membre )
        @if ($membre->genre == 'Femme')
            <p class="genre-female">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


    
    
</section>