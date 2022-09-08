<section >
    <h1>Section 4 : Males 18 24</h1>
    <div class="section-1">
        @foreach ($malesold as $membre )
        @if ($membre->genre == 'Homme')
            <p class="genre-male">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


    
    
</section>