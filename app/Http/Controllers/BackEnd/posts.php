<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Post;
use File;
use Storage;

class posts extends BackEndController
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'title'     => 'required|string',
            'content'   => 'required|string',
            'image'     =>  validate_image(),
            'slug'      => 'required|string',
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/posts'), $image_page);
            $data['image'] = $image_page;
        }


        $request->user()->posts()->create($data);
        alert()->success(trans('admin.success'), 'Done');
        return redirect()->route('posts.index');
    }

    public function update(Request $request, $id)
    {

      try{


        $data = $this->validate(request(), [
            'title'     => 'required|string',
            'content'   => 'required|string',
            'image'     =>  validate_image(),
            'slug'      => 'required|string',
        ]);

        $old_data = $this->model->findOrfail($id)->first();
        if(request()->hasFile('image')){
            $image = $request->file('image');
            $image_page = time().$image->getClientOriginalName();
            $image->move(public_path('uploads/posts'), $image_page);
            $data['image'] = $image_page;

            $old_image = public_path('uploads/posts/'.$old_data->image);
            if(file_exists($old_image))
            {
              File::delete($old_image);
            }
        }

        $request->user()->posts()->find($id)->update($data);
        alert()->success(trans('admin.update'), 'Done');
        return redirect()->route('posts.edit', ['id' => $id]);

      }catch(\Exception $ex){
          alert()->error('Error !! Check This Page .', 'Done');
          return back();
      }
    }
}
