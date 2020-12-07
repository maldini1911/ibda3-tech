<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Service;
use File;
use Storage;

class Services extends BackEndController
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'title'     => 'required|string',
            'content'   => 'required|string',
            'image'     =>  validate_image(),
            'is_active' => 'required|string',
            'slug'      => 'required|string',
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $image_page);
            $data['image'] = $image_page;
        }


        $request->user()->services()->create($data);
        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('services.index');
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'title'     => 'required|string',
            'content'   => 'required|string',
            'image'     =>  validate_image(),
            'is_active' => 'required|string',
            'slug'      => 'required|string',
        ]);


        $old_data = $this->model->findOrfail($id)->first();
        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $image_page);
            $data['image'] = $image_page;

            $old_image = public_path('uploads/services/'.$old_data->image);
            if(file_exists($old_image))
            {
              File::delete($old_image);
            }
        }


        $request->user()->services()->find($id)->update($data);
        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('services.edit', ['id' => $id]);
    }
}
