<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CausesCrudController;
use App\Models\Cause;
use App\Models\Causes;
use App\Http\Requests\StoreCauseRequest;
use App\Http\Requests\UpdateCauseRequest;
use App\Models\Dons;
use PatricPoba\MtnMomo\MtnConfig;
use PatricPoba\MtnMomo\MtnCollection;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie_id = request()->categorie;

        if(!$categorie_id)    $causes = Causes::take(6)->orderBy("created_at","desc")->with(["organisations","categories"])->get();
        else $causes = Causes::take(6)->orderBy("created_at","desc")->where("id_cate",$categorie_id)->with(["organisations","categories"])->get();
        return view("causes", compact("causes"));
    }

    public function mtn(Request $request)
    {
        // dd($request);
        $mtn="mtn";
        $objet = "faire une dona";// L'objet
        $prix = $request->montant; // montant
        $nom = "anonyme".strval(rand());
        $numero = $request->numero;
        $informe = $request->informe;
        $email = $request->email;
        if($informe){
        $nom = $request->nom;
        }
        $id = $request->id;
        // dd($cause->collecte+$request->montant);
        $cause = Causes::where("id",$id)->first();
        $montant_avant = $cause->collecte;
        $montant_apres = $cause->collecte+$request->montant;
        Causes::where("id",$id)->update(["collecte"=>$montant_apres]);
        $cause = Causes::where("id",$id)->first();

        // dd($cause);


        $config = new MtnConfig([
            // mandatory credentials
            'baseUrl'               => 'https://ericssonbasicapi1.azure-api.net',
            'currency'              => 'XOF',
            'targetEnvironment'     => 'mtnivorycoast',
            // 'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com',
            // 'currency'              => 'EUR',
            // 'targetEnvironment'     => 'sandbox',

            // collection credentials
            // "collectionApiSecret"   => '1d810fcff797435cb4a81e7e6b3ab260', //API key
            // "collectionPrimaryKey"  => '63bcb51e652e4d7393bad07e053e1e95', //ocpim
            // "collectionUserId"      => 'd291fd8f-572a-4a45-9e77-d9aaf5458de9' // Api user

            "collectionApiSecret"   => '2034191c027c4937b02298750fb741fc', //API key
            "collectionPrimaryKey"  => '7f2db352b7304e51bc50af453573ed6c', //ocpim
            "collectionUserId"      => 'c94e7642-bb67-4849-8108-4be7b2d0a6b4' // Api user
        ]);


        $collection = new MtnCollection($config);
        // $indice = '225';
        $params = [
            "mobileNumber"      => '225'.$numero,//$indice.  $numero,  // "mobileNumber"      => $indice. '0586953562',
            "amount"            => $prix , //$prix,
            "externalId"        => '774747234',
            "payerMessage"      => 'dona',
            "payeeNote"         => '1212'
        ];

        $transactionId = $collection->requestToPay($params);

        // echo $transactionId;
        // echo $indice;

        $transaction = $collection->getTransaction($transactionId);



        // $ion =$transaction->financialTransactionId;
        $ion1 =$transaction->externalId;
        $ion2 =$transaction->amount;
        $ion3 =$transaction->payer;
        // // $ion4 = $transaction->payer->payerpartyId;
        $ion5 =$transaction->currency;
        $ion6 =$transaction->status;
        //dd($transaction);

        $data = [
            "id_cause" => $cause->id,
            "nom" => $nom,
            "numero" => $numero,
            "email" => $email,
            "montant" => $prix,
            "montant_avant" => $montant_avant,
            "montant_apres" => $montant_apres,
            "transaction_id" => $transactionId,
            "created_at" => now(),
        ];
        Dons::insert($data);

        try {
            if($informe) Mail::to($email)->send(new WelcomeMail($data, $cause));
        } catch (\Throwable $th) {
            throw $th;
        }

        return view('lastpart',[
                'mtn'=> $mtn,
                'ion6'=>$ion6,
                'transactionId'=>$transactionId,
                'objet'=>$objet,
                'numero'=>$numero,
                'prix'=>$prix,
                'nom'=>$nom,

            ]);


    }
    public function mtnretour(Request $request)
    {
        // dd($request);
        $mtn="mtn";
        $transactionId = $request->transactionId;

        $objet = $request->objet;
        $numero = $request->numero;
        $prix = $request->prix;
        $nom = $request->nom;




        $config = new MtnConfig([
            // mandatory credentials
            'baseUrl'               => 'https://ericssonbasicapi1.azure-api.net',
            'currency'              => 'XOF',
            'targetEnvironment'     => 'mtnivorycoast',
            // 'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com',
            // 'currency'              => 'EUR',
            // 'targetEnvironment'     => 'sandbox',

            // collection credentials
            // "collectionApiSecret"   => '1d810fcff797435cb4a81e7e6b3ab260', //API key
            // "collectionPrimaryKey"  => '63bcb51e652e4d7393bad07e053e1e95', //ocpim
            // "collectionUserId"      => 'd291fd8f-572a-4a45-9e77-d9aaf5458de9' // Api user

            "collectionApiSecret"   => '2034191c027c4937b02298750fb741fc', //API key
            "collectionPrimaryKey"  => '7f2db352b7304e51bc50af453573ed6c', //ocpim
            "collectionUserId"      => 'c94e7642-bb67-4849-8108-4be7b2d0a6b4' // Api user
        ]);


        $collection = new MtnCollection($config);



       //55f8fb98-3917-4202-944b-b3fc3b5afb64

        $transaction = $collection->getTransaction($transactionId);

        // var_dump($transaction);

        // $ion1 =$transaction->externalId;
        // $ion2 =$transaction->amount;
        // $ion3 =$transaction->payer;
        // // $ion4 = $transaction->payer->payerpartyId;
        // $ion5 =$transaction->currency;
        $ion6 =$transaction->status;
        // echo $transacstaus6;


        // base de donnée
        // if($ion6 == "SUCCESSFUL"){
        //     $payer = new Payer;

        //     $payer->reseau= $mtn;
        //     $payer->volume_sms=  $objet;
        //     $payer->trans=  $transactionId;
        //     $payer->status=  $ion6;
        //     $payer->numero=  $numero;
        //     $payer->prix=  $prix;
        //     $payer->nom= $nom;
        //     $payer->save();

        // }
        // if($ion6 == "FAILED"){
        //     $payers = new Payer;

        //     $payers->reseau= $mtn;
        //     $payers->volume_sms= $objet;
        //     $payers->trans=  $transactionId;
        //     $payers->status=  $ion6;
        //     $payers->numero=  $numero;
        //     $payers->prix=  $prix;
        //     $payers->nom= $nom;
        //     $payers->save();


        // }

        return view('lastpart',[
            'mtn'=> $mtn,
            'ion6'=>$ion6,
            'transactionId'=>$transactionId,
            'objet'=>$objet,
            'numero'=>$numero,
            'prix'=>$prix,
            'nom'=>$nom,

        ]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCauseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($cause)
    {
        $cause = Causes::where("id",$cause)->with(["organisations","categories"])->first();

        return view("showcause", compact("cause"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CausesCrudController $cause)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCauseRequest $request, Causes $cause)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Causes $cause)
    {
        //
    }
}
