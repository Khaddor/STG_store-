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
        
       // $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))	->get();

        
        
        return Chartisan::build()

              
            
            ->labels(['Tanger' , 'Rabat' , 'Casablanca' , 'Tetuan'])
            ->dataset('Orders',[$tanger->count() , $rabat->count(),
                                     $casablanca->count() , $tetuan->count() ]);
    }
}