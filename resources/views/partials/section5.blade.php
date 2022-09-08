<section >
    <h1>Section 4 : Females 18 24</h1>
    <div class="section-1">
        @foreach ($femalesold as $membre )
        @if ($membre->genre == 'Femme')
            <p class="genre-female">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


    
    
</section>