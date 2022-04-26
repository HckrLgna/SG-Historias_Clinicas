<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.backoffice.pages.user.index',[
            'users'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.backoffice.pages.user.create',[
            'roles'=>Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, User $user)
    {
        $user=$user->store($request);
        return redirect()->route('backoffice.user.show',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('theme.backoffice.pages.user.show',[
            'user'=>$user,
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('theme.backoffice.pages.user.edit',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->my_update($request);
        return redirect()->route('backoffice.user.show',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('backoffice.user.index');
    }
    public function assign_role(User $user){
        return view('theme.backoffice.pages.user.assign_role',[
            'user'=>$user,
            'roles'=>Role::all()
        ]);
    }
    public function role_assignment(Request $request,User $user){
        $user->role_assignment($request);
        return redirect()->route('backoffice.user.show',$user);

    }
    public function assign_permission(User $user){
        return view('theme.backoffice.pages.user.assign_permission',[
            'user' => $user,
            'roles' => $user->roles
        ]);
    }
    public function permission_assignment(Request $request, User $user){
        $user->permissions()->sync($request->permissions);
        return redirect()->route('backoffice.user.show',$user);
    }

    public function profile(){
       return view('theme.frontoffice.pages.user.profile');
    }
}
