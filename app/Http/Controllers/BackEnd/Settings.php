<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Setting;
use File;

class Settings extends BackEndController
{
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'logo_nav'                  =>  validate_image(),
            'logo_footer'               =>  validate_image(),
            'intro_image'               =>  validate_image(),
            'slogan'                    => 'required|string',
            'address'                   => 'required|string',
            'status_website'            => 'required',
            'maintenance_message'       => 'sometimes|nullable|string',
        ]);


        if(request()->hasFile('logo_nav')){
            $logo_nav = $request->file('logo_nav');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['logo_nav'] = $image_logo_nav;
        }

        if(request()->hasFile('logo_footer')){
            $logo_nav = $request->file('logo_footer');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['logo_footer'] = $image_logo_nav;
        }
        if(request()->hasFile('intro_image')){
            $logo_nav = $request->file('intro_image');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['intro_image'] = $image_logo_nav;
        }

        $this->model->create($data);
        alert()->success(trans('admin.success'), trans('admin.update'));
        return redirect()->route('settings.index');
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'logo_nav'                  =>  validate_image(),
            'logo_footer'               =>  validate_image(),
            'intro_image'               =>  validate_image(),
            'slogan'                    => 'required|string',
            'address'                   => 'required|string',
            'status_website'            => 'required',
            'maintenance_message'       => 'sometimes|nullable|string',
        ]);


        $old_data = $this->model->findOrfail($id)->first();
        if(request()->hasFile('logo_nav')){
            $logo_nav = $request->file('logo_nav');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['logo_nav'] = $image_logo_nav;

            $old_logo_nav = public_path('uploads/settings/'.$old_data->logo_nav);
            if(file_exists($old_logo_nav))
            {
              File::delete($old_logo_nav);
            }
        }

        if(request()->hasFile('logo_footer')){
            $logo_nav = $request->file('logo_footer');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['logo_footer'] = $image_logo_nav;
            $old_logo_footer = public_path('uploads/settings/'.$old_data->logo_footer);
            if(file_exists($old_logo_footer))
            {
              File::delete($old_logo_footer);
            }
        }

        if(request()->hasFile('intro_image')){
            $logo_nav = $request->file('intro_image');
            $image_logo_nav = time().$logo_nav->getClientOriginalName();
            $logo_nav->move(public_path('uploads/settings'), $image_logo_nav);
            $data['intro_image'] = $image_logo_nav;
            $old_intro_image = public_path('uploads/settings/'.$old_data->intro_image);
            if(file_exists($old_intro_image))
            {
              File::delete($old_intro_image);
            }
        }

        $this->model->findOrfail($id)->update($data);
        alert()->success(trans('admin.update'), trans('admin.update'));
        return redirect()->route('settings.edit', ['id' => $id]);
    }
}
