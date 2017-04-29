<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sitemap;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
    	$datas = Sitemap::orderBy('id_sitemap')->get();

    	return view('adm_index')->with('datas', $datas);
    }

    public function create()
    {
    	return view('adm_add');
    }

    public function store(Request $request)
    {
    	$add = new Sitemap();
    	$add->url = $request->get('url');
    	$add->priority = $request->get('priority');

    	$add->save();

    	return redirect('admin/index');
    }

    public function edit($id_sitemap)
    {
    	$edit = Sitemap::where('id_sitemap', $id_sitemap)->first();
    	return view('adm_edit')->with('edit', $edit);
    }

    public function update(Request $request, $id_sitemap)
    {
    	$update = Sitemap::where('id_sitemap', $id_sitemap)->first();
    	$update->url = $request->get('url');
    	$update->priority = $request->get('priority');

    	$update->update();

    	return redirect('admin/index');
    }

    public function destroy($id_sitemap)
    {
    	$delete = Sitemap::where('id_sitemap', $id_sitemap);
    	$delete->delete();

    	return redirect('admin/index');
    }


    public function show()
    {
    	$datas = Sitemap::orderBy('priority', 'DESC')->get();
        $contents = view('show')->with('datas', $datas);

        return response($contents)->header('Content-Type', 'application/xml; charset="ISO-8859-1');
    }
}
