<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Page;
use File;
use Storage;

class Pages extends BackEndController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'title'         => 'required|string',
            'content'       => 'required|string',
            'image'         =>  validate_image(),
            'show_in_menu'  => 'required|string',
            'slug'          => 'required|string',
        ]); ;

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/pages'), $image_page);
            $data['image'] = $image_page;
        }

        $request->user()->pages()->create($data);
        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('pages.index')->with('success', trans('admin.success'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'title'         => 'required|string',
            'content'       => 'required|string',
            'image'         =>  validate_image(),
            'show_in_menu'  => 'required|string',
            'slug'          => 'required|string',
        ]);

        $old_data = $this->model->findOrfail($id)->first();
        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/pages'), $image_page);
            $data['image'] = $image_page;

            $old_image = public_path('uploads/pages/'.$old_data->image);
            if(file_exists($old_image))
            {
              File::delete($old_image);
            }
        }

        $request->user()->pages()->find($id)->update($data);

        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('pages.edit', ['id' => $id]);
    }
}
