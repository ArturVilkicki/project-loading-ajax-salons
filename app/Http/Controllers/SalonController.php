<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salons = Salon::all();
        return view('welcome', compact(
          'salons'
        ));
    }

    public function search($value)
    {
      if ($value == 'all') {
        $salons = Salon::all();
      } else {
          $salons = Salon::where('service', $value)->get();
      }


      $output = "";

      foreach ($salons as $key => $salon) {
        $output.='<div class="col-12 mb-5"><div class="row"><div class="col-12 col-md-6"><div class="salon-image"> <img src="' . $salon->image .'" alt="" class="img-fluid"></div></div><div class="col-12 col-md-6 d-flex align-items-center"><div class="salon-content"><h2>' . $salon->title . '</h2><p>' .$salon->rating. '</p>';
        $output.= ($salon->rating == 1 ? '&#9733;' : '') . ($salon->rating == 2 ? '&#9733; &#9733;' : '') . ($salon->rating == 3 ? '&#9733; &#9733; &#9733;' : '') . ($salon->rating == 4 ? '&#9733; &#9733; &#9733; &#9733;' : '') . ($salon->rating == 5 ? '&#9733; &#9733; &#9733; &#9733; &#9733;' : '');
        $output.= '</p><p>' . $salon->address . '</p><div class="row"><div class="col-12 col-md-6">' . ($salon->service == 'male_haircut' ? 'Vyriškas kirpimas' : 'Moteriškas kirpimas');
        $output.= '</div><div class="col-12 col-md-6">' .  $salon->service_price . '&euro' . '</div></div></div></div></div></div>';
      }

      return response()->json($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function show(Salon $salon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function edit(Salon $salon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salon $salon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salon $salon)
    {
        //
    }
}
