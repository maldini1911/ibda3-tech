<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BackEndController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $titlePage = $this->getClassName();
        $relations = $this->relations_index();
        $folderName = $this->getFolderName();
        $rows = $this->model;
        $rows = $this->filter($rows);
        if(!empty($relations))
        {
            $rows = $rows->with($relations);
        }
        $rows = $rows->paginate(10);
        $routeName = $this->getFolderName();
        return view('Admin.'.$folderName.'.index', compact('rows', 'titlePage', 'routeName'));
    }

    public function create()
    {
        $titlePage = $this->getClassName();
        $folderName = $this->getFolderName();
        $routeName = $this->getFolderName();
        return view('Admin.'.$folderName.'.create', compact('titlePage', 'routeName'));
    }

    public function edit($id)
    {
        $titlePage = $this->getClassName();
        $row = $this->model->findOrfail($id);
        $folderName = $this->getFolderName();
        $routeName = $this->getFolderName();
        return view('Admin.'.$folderName.'.edit', compact('row', 'titlePage', 'routeName'));
    }

    public function destroy($id)
    {


        $row = $this->model->findOrfail($id);
        $row->delete();
        alert()->success('Success Delete', 'Done');
        return back();
    }

    protected function getFolderName()
    {
        return strtolower(str_plural(class_basename($this->model)));
    }
    protected function getClassName()
    {
        return str_plural(class_basename($this->model));
    }
    protected function filter($rows)
    {
        return $rows;
    }

    protected function relations_index()
    {
        return [];
    }

    protected function relations_create_edit()
    {
        return [];
    }
}
