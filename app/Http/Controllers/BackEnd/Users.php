<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;
use App\User;

class Users extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'name'          => 'required|string',
            'email'         => 'required|string|email|unique:users',
            'password'      => 'required|string'
        ]);
        $data['password'] = bcrypt($data['password']);
        $this->model->create($data);

        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'name'              => 'required|string',
            'email'             => 'required|string|email|unique:users,email,'.$id,
            'password'          => 'sometimes|nullable'
        ]);
        if(request()->has('password') && request()->get('password') != '')
        {
            $data['password'] = bcrypt($data['password']);
            $this->model->findOrfail($id)->update($data);
        }else{

          unset($data['password']);
          $this->model->findOrfail($id)->update($data);
        }


        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('users.edit', ['id' => $id]);
    }
}
