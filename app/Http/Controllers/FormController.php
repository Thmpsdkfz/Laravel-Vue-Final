<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http\Request\RequestReserva;
use App\Reserva;
use App\Mesa;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
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

    public function ajax_reservas(){
        $selectReservas = new Reserva();
        $reservas = $selectReservas->all();
        return $reservas;
    }

    public function ajax_mesas(){
        $selectMesas = new Mesa();
        $mesas = $selectMesas->all();
        return $mesas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->clientName = $request->clientName;
        $reserva->clientLastName = $request->clientLastName;
        $reserva->host = $request->host;
        $reserva->clientsQty = $request->clientsQty;
        $reserva->tableNumber = $request->tableNumber;

        $reserva->save();
        return redirect('/');
    }

    public function selectTables(){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
