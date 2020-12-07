<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Photo;
use File;
use Storage;

class projects extends BackEndController
{
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }


    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'title'         => 'required|string',
            'content'       => 'required|string',
            'image'         =>  validate_image(),
            'cover_image'   =>  validate_image(),
            'slug'          => 'required|string',
            'is_active'     => 'required'
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/projects'), $image_page);
            $data['image'] = $image_page;
        }

        if(request()->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/projects'), $image_page);
            $data['cover_image'] = $image_page;
        }

        $row = $request->user()->projects()->create($data);

        //====> Start More Upload Photos
        //==> Start Update Multi Images
        $photos = [];
        if($files = $request->file('photos'))
        {

            foreach($files as $file)
            {
                $fileName = time().$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $file->move(public_path('uploads/projects'), $fileName);

                $photos[] = [
                    'url' => 'uploads/projects/'.$fileName,
                    'ext' => $ext
                  ];
            }

            Photo::insert($photos);
        }
        //==> End Update Multi Images
        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('projects.index');
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'title'         => 'required|string',
            'content'       => 'required|string',
            'image'         =>  validate_image(),
            'cover_image'   =>  validate_image(),
            'slug'          => 'required|string',
            'is_active'     => 'required',
        ]);

        $old_data = $this->model->findOrfail($id)->first();
        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/projects'), $image_page);
            $data['image'] = $image_page;

            $old_image = public_path('uploads/projects/'.$old_data->image);
            if(file_exists($old_image))
            {
              File::delete($old_image);
            }
        }

        if(request()->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/projects'), $image_page);
            $data['cover_image'] = $image_page;

            $old_image = public_path('uploads/projects/'.$old_data->image);
            if(file_exists($old_image))
            {
              File::delete($old_image);
            }
        }

        $request->user()->projects()->find($id)->update($data);

        //==> Start Update Multi Images
        $photos = [];
        if($files = $request->file('photos'))
        {

            foreach($files as $file)
            {
                $fileName = time().$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $file->move(public_path('uploads/projects'), $fileName);

                $photos[] = [
                    'url' => 'uploads/projects/'.$fileName,
                    'ext' => $ext,
                    'project_id' => $id
                  ];
            }

            Photo::insert($photos);
        }
        //==> End Update Multi Images

        //====> End More Upload Photos
        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('projects.edit', ['id' => $id]);
    }
}
