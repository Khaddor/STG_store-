<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\confirmedOrder;
use App\Models\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersChart extends BaseChart
{

    public ?string $name = 'OrdersChart';



    public ?array $middlewares = ['auth','is_admin'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        
        $tanger = confirmedOrder::where('city','Tanger');
        $rabat = confirmedOrder::where('city','Rabat');
        $casablanca = confirmedOrder::where('city','Casablanca');
        $tetuan = confirmedOrder::where('city','Tetuan');
        $Marrakech = confirmedOrder::where('city','Marrakech');
        $Fes = confirmedOrder::where('city','Fes');
        $Agadir = confirmedOrder::where('city','Agadir');
        $Settat = confirmedOrder::where('city','Settat');
        $Laayoun = confirmedOrder::where('city','Laayoun');
       // $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))	->get();

        
        
        return Chartisan::build()

              
            
            ->labels(['Tanger' , 'Rabat' , 'Casablanca' , 
                            'Tetuan' , 'Marrakech' , 'Fes' , 
                                'Agadir' ,'Settat' , 'Laayoun'])

            ->dataset('Orders',[$tanger->count() , $rabat->count(),
                                     $casablanca->count() , $tetuan->count() ,
                                    $Marrakech->count() ,$Fes->count() , 
                                    $Agadir->count() , $Settat->count() ,$Laayoun->count() ]);
    }
}