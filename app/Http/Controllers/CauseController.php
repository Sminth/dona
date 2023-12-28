<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CausesCrudController;
use App\Models\Cause;
use App\Models\Causes;
use App\Http\Requests\StoreCauseRequest;
use App\Http\Requests\UpdateCauseRequest;

use PatricPoba\MtnMomo\MtnConfig;
use PatricPoba\MtnMomo\MtnCollection;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causes = Causes::take(6)->orderBy("created_at","desc")->with(["organisations","categories"])->get();

        return view("causes", compact("causes"));
    }

    public function mtn(Request $request)
    {
        // dd($request);
        $mtn="mtn";
        $objet = "faire une dona";// L'objet
        $prix = $request->montant; // montant
        $nom = "donateur";
        $numero = $request->numero;



        $config = new MtnConfig([
            // mandatory credentials
            // 'baseUrl'               => 'https://ericssonbasicapi1.azure-api.net',
            // 'currency'              => 'XOF',
            // 'targetEnvironment'     => 'mtnivorycoast',
            'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com',
            'currency'              => 'EUR',
            'targetEnvironment'     => 'sandbox',


            // collection credentials
            "collectionApiSecret"   => '1d810fcff797435cb4a81e7e6b3ab260', //API key
            "collectionPrimaryKey"  => '63bcb51e652e4d7393bad07e053e1e95', //ocpim
            "collectionUserId"      => 'd291fd8f-572a-4a45-9e77-d9aaf5458de9' // Api user
        ]);


        $collection = new MtnCollection($config);
        // $indice = '225';
        $params = [
            "mobileNumber"      => '2250574386145',//$indice.  $numero,  // "mobileNumber"      => $indice. '0586953562',
            "amount"            => '10', //$prix,
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
