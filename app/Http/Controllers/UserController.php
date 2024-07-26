<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->index();

        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->user->store($request->all());

        return redirect('/users');
    }

    public function show($id)
    {
        $user = $this->user->show($id);

        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = $this->user->show($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->user->update($request->all(), $id);

        return redirect('/users');
    }

    public function destroy($id)
    {
        $this->user->destroy($id);

        return redirect('/users');
    }
}
