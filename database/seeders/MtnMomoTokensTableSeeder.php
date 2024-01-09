<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MtnMomoTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mtn_momo_tokens')->delete();
        
        \DB::table('mtn_momo_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'access_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbnRJZCI6IjYzYzZjMWYxLWUxZDMtNDAyNC1iMDcyLTdiYTQyNTA0ODk2YiIsImV4cGlyZXMiOiIyMDIzLTEyLTI1VDA0OjA3OjAzLjk3OCIsInNlc3Npb25JZCI6IjVjNjliZWY0LTA2ODEtNDU4OS1hMjM1LTQxYTk2OTE3ZTAzNyJ9.fXwsvR8MBDEEG4DUUvMSYKzhFoh-3z23eyiY0QAzHCPdOKvTjN5firLiuoqlxdpmhjpe4fJFhj-4u52ZURAj_zpH9olFTaHPYyGK6tHc4PdWsF-LTEezyx26y0IWaeavzxlKjW4V5RBVEFt4ZHxHt3vKZ9FWbyJAknSWdEt_H213f8JcD31ctVghgJJWUh9pCm7u-VZZCmhhljjdHf4m8wjtdusYbyobGl6TBEHK1jo-d4TAZJzckqsfSvZr76lIYMzLkxBM1iquJ25UaHQCCi160vB1ti3oHihjyGXxEfvlN2N_vItbvI8UIj9Bu-TlGCvd4nX2-OdoXSyHHIbSNA',
                'refresh_token' => NULL,
                'token_type' => 'Bearer',
                'product' => 'collection',
                'created_at' => '2023-12-25 03:07:03',
                'updated_at' => '2023-12-25 03:07:03',
                'expires_at' => '2023-12-25 04:07:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}