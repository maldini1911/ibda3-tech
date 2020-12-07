<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;

use App\Models\Social_Media;
use File;
use Storage;

class Social_Medias extends BackEndController
{
    public function __construct(Social_Media $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'icon_name'     => 'required|string',
            'media_name'     => 'required|string',
        ]); 


        $this->model->create($data);
        return redirect()->route('social_media.index');
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'icon_name'     => 'required|string',
            'media_name'    => 'required|string',
        ]); 
    

        $this->model->findOrfail($id)->update($data);
        return redirect()->route('social_media.edit', ['id' => $id]);
    }
}
