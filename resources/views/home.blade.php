@extends('layouts.index')

@section('content')

      {{-- SECTION UNE --}}
    <section>
        <h1>Tout les mebres: {{$datas -> count()}} membres</h1>
        <div class="row">
            @foreach ($datas as $data)
                @if ($data->genre == 'Homme')
                    <p class="col-2 text-primary">{{$data->nom}}<p>
                @else
                <p class="col-2 text-danger">{{$data->nom}}<p>
                @endif
            @endforeach
        </div>
    </section>

     {{-- SECTION DEUX --}}
    <section>
        <h1>Tout les hommes: {{$datas->count()}}</h1>
        <div class="row">
            @foreach ($datas as $hommes)
                @if ($hommes->genre== 'Homme')
                    <p class="col-2">{{$hommes->nom}}</p>
                    
                @endif
            @endforeach
        </div>
    </section>

        {{-- SECTION TROIS --}}
    <section>
        <h1>Toutes les femmes: {{$datas->count()}}</h1>
        <div class="row">
            @foreach ($datas as $femmes)
                @if ($femmes->genre== 'Femme')
                    <p class="col-2">{{$femmes->nom}}</p>
                    
                @endif
            @endforeach
        </div>
    </section>

        {{-- SECTION QUATRE --}}
    <section>
        <div class="row">
            <div class="col-2">
                @foreach ($datas as $item)
                    @if ($item->genre =='Homme' && $item->age >=18 && $item->age <=24)
                        <p >prenom {{$item->nom}} age{{$item->age}}<p>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

         {{-- SECTION CINQ --}}
         <section>
            <div class="row">
                <div class="col-2">
                    @foreach ($datas as $item)
                        @if ($item->genre =='Femme' && $item->age >=18 && $item->age <=24)
                            <p class='text-primary'>prenom {{$item->nom}} age{{$item->age}}<p>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

                {{-- SECTION SIX --}}
                <section>
                    <div class="row">
                        <div class="col-2">
                            @foreach ($datas as $item)
                                @if ($item->age <18 || $item->age >24)
                                    <p class="text-danger">prenom {{$item->nom}} age{{$item->age}}<p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
        

@endsection