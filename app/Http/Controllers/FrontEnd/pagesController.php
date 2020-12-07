<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use App\Models\Page;
use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Client;


class pagesController extends Controller
{
  public function index()
  {
    $nav_page = 'nav-home';
    $pages = Page::get();
    $services = Service::get();
    $projects = Project::where('is_active', true)->get();
    $posts = Post::orderBy('id', 'desc')->take(4)->get();
    $clients = Client::get();

    return view('Design.home', compact(
      'nav_page', 'pages', 'services', 'projects', 'posts', 'clients'
    ));
  }

  public function works()
  {
    $nav_page = 'nav-works';
    $projects = Project::where('is_active', true)->paginate(9);

    return view('Design.works', compact('nav_page', 'projects'));
  }

  public function apps_works($id)
  {
    $nav_page = 'nav-app';
    $project = Project::find($id);

    return view('Design.apps_works', compact('nav_page', 'project'));
  }

  public function blogs()
  {

    $nav_page = 'nav-blogs';
    $posts = Post::paginate(12);
    return view('Design.blogs', compact('nav_page', 'posts'));
  }

  public function read_blog($id)
  {
    $nav_page = 'nav-read-blog';
    $post = Post::find($id);
    Post::where('id', $id)->update(['views' => $post->views+1]);
    return view('Design.read_blog', compact('nav_page', 'post'));
  }

}
