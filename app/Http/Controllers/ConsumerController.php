<?php
/**
*
*  @author: Lucas Lacerda (@lucaaslb)
*
*/

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConsumerController extends Controller
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
        'first_name'  =>  'required',
        'last_name'   =>  'required',
        'email'       =>  'required',
        'password'    =>  'required',
        'cpf'         =>  'required',
        'date_born'   =>  'required',
        'cep'         =>  'required',
        'endereco'    =>  'required',
        'numEndereco' =>  'required',
        'bairro'      =>  'required',
        'cidade'      =>  'required',
        'uf'          =>  'required',
        'phone'       =>  'required',
        'mobile'      =>  'required'
      ]);

      $consumer = new Consumer([
        'first_name'  =>   $request->get('first_name'),
        'last_name'   =>   $request->get('last_name'),
        'email'       =>   $request->get('email'),
        'password'    =>   Hash::make($request->get('password')),
        'cpf'         =>   $request->get('cpf'),
        'gender'      =>   $request->get('gender'),
        'date_born'   =>   $request->get('date_born'),
        'cep'         =>   $request->get('cep'),
        'endereco'    =>   $request->get('endereco'),
        'numEndereco' =>   $request->get('numEndereco'),
        'bairro'      =>   $request->get('bairro'),
        'cidade'      =>   $request->get('cidade'),
        'uf'          =>   $request->get('uf'),
        'phone'       =>   $request->get('phone'),
        'mobile'      =>   $request->get('mobile')
      ]);

      $consumer->save();
      echo "Cadastro efetuado com sucesso". "<br> <br>".
      "<img src='https://goo.gl/fNfvk5' height='100' width='100' title='Sucesso!'>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function show(Consumer $consumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumer $consumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumer $consumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumer $consumer)
    {
        //
    }
}
