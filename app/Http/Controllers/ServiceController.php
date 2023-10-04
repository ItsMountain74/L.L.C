<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('dash.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'image'=>'nullable',
            'desc' => 'nullable ',
        ]);

        try {
            $service = new Service();
            $service->title = $request->title;
            $service->image = $request->image;
            $service->desc = $request->desc;

            if ($request->file('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('storage/images/services/', $filename);
                $service['image'] = $filename;
            }
            $service->save();

            return redirect()->route('service.index')->with('success', 'Service added !');
        } catch (Exception $e) {
            return dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('dash.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|min:3',
            'desc' => 'nullable',
        ]);
        try {
            $service->title = $request->title;
            $service->image = $request->image;
            $service->desc = $request->desc;

            if ($request->file('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('storage/images/services/', $filename);
                $service['image'] = $filename;
            }
            $service->save();

            return redirect()->route('service.index')->with('success', 'Service updated !');
        } catch (Exception $e) {
            return dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {
            $service->delete();

            return redirect()->route('service.index')->with('success', 'Service deleted!');
        } catch (Exception $e) {
            return dd($e);
        }
    }
}
