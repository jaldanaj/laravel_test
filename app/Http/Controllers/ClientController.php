<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Cities;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('search') !== null){
            $textoBuscador = $request->input('search');
        }else{
          if(isset($_GET['city'])){
            $textoBuscador = $_GET['city'];
          }else{
          $textoBuscador = null;
          }
        }
        $clients = Client::Where('city','like', '%'.$textoBuscador.'%')->paginate(5);
        $clients->appends(['city' => $textoBuscador]);
        $cities = Cities::orderBy('name')->get();
        return view('admin.clientes.index', compact('clients', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = Cities::orderBy('name')->get();
        return view('admin.clientes.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, $id)
    {
        $client = Client::find($id);
        return view('admin.clientes.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, $id)
    {
        $cities = Cities::orderBy('name')->get();
        $client = Client::find($id);
        return view('admin.clientes.edit', compact('client', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client, $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        $client = Client::find($id);
        $client->delete();
        return back();
    }
}
