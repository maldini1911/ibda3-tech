<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Client;
use File;
use Storage;

class clients extends BackEndController
{
    public function __construct(Client $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {

      try{
        $data = $this->validate(request(), [
            'name'     => 'required|string',
            'image'    => validate_image(),
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/clients'), $image_page);
            $data['image'] = $image_page;
        }

        $request->user()->clients()->create($data);
        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('clients.index');

      }catch(\Exception $ex){
        alert()->error('Error !! Check This Page .', 'Done');
        return back();
      }
    }

    public function update(Request $request, $id)
    {

      try{
        $data = $this->validate(request(), [
            'name'   => 'required|string',
            'image'  =>  validate_image(),
        ]);


        $old_data = $this->model->findOrfail($id)->first();

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/clients'), $image_page);
            $data['image'] = $image_page;
            if($old_data)
            {
              $old_image = public_path('uploads/clients/'.$old_data->image);
              if(file_exists($old_image))
              {
                File::delete($old_image);
              }
            }
        }

        $request->user()->clients()->find($id)->update($data);
        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('clients.edit', ['id' => $id]);
      }catch(\Exception $ex){
        alert()->error('Error !! Check This Page .', 'Done');
        return back();
      }
    }
}
