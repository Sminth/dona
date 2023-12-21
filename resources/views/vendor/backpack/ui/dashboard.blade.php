@extends(backpack_view('blank'))

@php

    /* compter */
    // $demandent = App\Models\Commande::where('status','=',0)->count();
    // $demandet = App\Models\Commande::where('status','=',1)->count();


    // $biensa = App\Models\Produits::where('enabled','=',1)->count();
    // $biensna = App\Models\Produits::where('enabled','=',0)->count();
    // $userCount = App\Clients::count();
    // $partenaire = DB::table('clients')
    // ->select('clients.id')
    // ->join('produits', 'produits.client_owner_id', '=', 'clients.id')
    // // ->groupBy('produits.client_owner_id')
    // ->distinct('clients.id')
    // ->count();

    $partenaire = DB::table('users')->count();
    // $partenaire = DB::table('clients')->where('type_compte','<>','client')->count();

    $organisations = App\Models\Organisations::get()->count();
    $categories = App\Models\Categories::get();
    $causes = App\Models\Causes::get()->count();
    $causesEnCours = App\Models\Causes::get()->where('status','=','collecte')->count();
    $causesEnTermine = App\Models\Causes::get()->where('status','<>','collecte')->count();

    //



    // $lastProduits = App\Models\Produits::orderBy('created_at', 'DESC')->first();

     // notice we use Widget::add() to add widgets to a certain group
    Widget::add()->to('before_content')->type('div')->class('row')->content([
        // notice we use Widget::make() to add widgets as content (not in a group)
        Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-primary')
            ->progressClass('progress-bar')
            ->value($organisations)
            ->description('Organisation.s')
            ->progress(100*(int)$organisations/100),

        Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-danger')
            ->progressClass('progress-bar')
            ->value($causesEnCours)
            ->description('Cause.s en cours')
            ->progress(100*(int)$causesEnCours/$causes),

            Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-warning')
            ->progressClass('progress-bar')
            ->value($causesEnTermine)
            ->description('Cause.s terminée.s')
            ->progress(100*(int)$causesEnTermine/$causes),


        Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-dark bg-secondary',
            'progressClass' => 'progress-bar',
            'value' => $partenaire,
            'description' => 'Donateur.s',
            'progress' => 100/1000,
        ]),



    ]);
    // print_r();

    // $widgets['before_content'][] = [
    //   'type' => 'div',
    //   'class' => 'row',
    //   'content' => [
    //         // widgets
    //         //   [
    //         //     'type' => 'chart',
    //         //     'wrapperClass' => 'col-md-6',
    //         //     // 'class' => 'col-md-6',
    //         //     'controller' => \App\Http\Controllers\Admin\Charts\LatestUsersChartController::class,
    //         //     'content' => [
    //         //         'header' => 'Enregistrements Clients', // optional
    //         //         // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
    //         //     ]
    //         // ],
    //         [
    //             'type' => 'chart',
    //             'wrapperClass' => 'col-md-12',
    //             // 'class' => 'col-md-6',
    //             'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class,
    //             'content' => [
    //                 'header' => 'Nouvelles Entrées', // optional
    //                 // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
    //             ]
    //         ],
    //     ]
    // ];


@endphp

@section('content')
    {{-- In case widgets have been added to a 'content' group, show those widgets. --}}
    {{-- @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ]) --}}
    <h2 class="text-center mt-5">Nombre de Cause par catégorie </h2>
    <div class="row mt-5">
        @foreach ($categories as $categorie)

        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 text-white bg-dark">
            <div class="card-body">
                    <div class="text-value">{{$categorie->libelle}}</div>
                    <div class="text-value">{{$categorie->getCausesCount()}} cause.s</div>

                    <div> {{$categorie->getCausesEnCoursCount()}} en cours</div>
                    <div>{{$categorie->getCausesTermineCount()}} terminée.s</div>

                    {{-- <div class="progress progress-white progress-xs my-2"> --}}
                    {{-- <div class="progress-bar" role="progressbar" style="width: 44.9%" aria-valuenow="44.9" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    {{-- </div> --}}

                  </div>

              </div>
        </div>

        @endforeach
      </div>

@endsection
