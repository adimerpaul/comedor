<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales proporcionadas son incorrectas'],
            ]);
        }
        return response()->json([
            'token'=>$user->createToken('web')->plainTextToken,
            'user'=>$user
        ],200);
    }
    public function register(Request $request){
        $request->validate([
            'email'=>'required|unique:users|email',
            'name'=>'required|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        $user=new User();
        $user->name= ( $request->name);
        $user->email=$request->email;
        $user->password=Hash::make( $request->password);
        $user->lat=0;
        $user->lng=0;
        $user->save();
        $token=$user->createToken('web')->plainTextToken;
        return response()->json([
            'token'=>$token,
            'user'=>User::find($user->id)
        ],200);
    }
    public function me(Request $request){
        $user=User::where('id',$request->user()->id)->firstOrFail();
        return $user;
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['res'=>'salido exitosamente'],200);
    }
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
        //
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
