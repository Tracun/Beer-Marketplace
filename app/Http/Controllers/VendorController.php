<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $this-> validate($request, [
        'cnpj'                =>  'required',
        'razao_social'        =>  'required',
        'nome_fantasia'       =>  'required',
        'nome_responsavel'    =>  'required',
        'user_login'          =>  'required',
        'password'            =>  'required',
        'email'               =>  'required',
        'cep'                 =>  'required',
        'endereco'            =>  'required',
        'numEndereco'         =>  'required',
        'bairro'              =>  'required',
        'cidade'              =>  'required',
        'uf'                  =>  'required',
        'phone'               =>  'required'

      ]);

      $vendor = new Vendor([
        'cnpj'                =>   $request->get('cnpj'),
        'razao_social'        =>   $request->get('razao_social'),
        'nome_fantasia'       =>   $request->get('nome_fantasia'),
        'nome_responsavel'    =>   $request->get('nome_responsavel'),
        'user_login'          =>   $request->get('user_login'),
        'password'            =>   Hash::make($request->get('password')),
        'email'               =>   $request->get('email'),
        'CEP'                 =>   $request->get('cep'),
        'endereco'            =>   $request->get('endereco'),
        'numEndereco'         =>   $request->get('numEndereco'),
        'bairro'              =>   $request->get('bairro'),
        'cidade'              =>   $request->get('cidade'),
        'uf'                  =>   $request->get('uf'),
        'phone'               =>   $request->get('phone')
      ]);

      $vendor->save();

      \Session::flash('msg_sucess', 'Cadastro realizado com sucesso, faça seu login!');
      return Redirect::to('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
