<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\CargoBooking;
use App\Models\Destination;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if user trying to access page is admin
        if (auth()->user()->type != 0) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $userCargosBookedToday = $user->cargoBookings()->whereDate('created_at', Carbon::today())->get();
        $userCargoTickets = $user->cargoBookings;

        $data = [
            'tickets' => $userCargoTickets,
            'todayCargos' => $userCargosBookedToday,
            'destinations' => Destination::pluck('name', 'id'),
        ];

        return view('passenger.send_cargo')->with($data);
    }

    /**
     * Store a newly created cargo ticket in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;

        $ticket = CargoBooking::find($id);
        $ticket->delivery_date = Carbon::create($ticket->delivery_date)->format('D jS M\, Y');
        $ticket->amount = number_format($ticket->amount, 2, '.', ',');

        return view('passenger.plugins.show_ticket')->with('ticket', $ticket);
    }
}
