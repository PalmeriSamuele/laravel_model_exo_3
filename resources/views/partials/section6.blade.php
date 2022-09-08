<section >
    <h1>Others</h1>
    <div class="section-1">
        @foreach ($others  as $membre )
        @if ($membre->genre == 'Femme')
            <p class="genre-female">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @if ($membre->genre == 'Homme')
            <p class="genre-male">{{$membre->nom}} {{$membre->age}}</p>
        @endif
        @endforeach
    </div>


</section>