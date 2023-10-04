<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Team::all();

        return view('dash.team.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'job_title' => 'required|min:3',
            'about' => 'required|min:5',
            'image' => 'required',
        ]);
        try {
            $member = Team::create([
                'name' => $validated['name'],
                'job_title' => $validated['job_title'],
                'about' => $validated['about'], 
                'image' => $validated['image'],
            ]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('storage/images/members/', $filename);
                $member['image'] = $filename;
            }
            $member->save();

            return redirect()->route('team.index')->with('success', 'Team member added !');
        } catch (Exception $e) {
            return dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('dash.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $member = Team::findOrFail($id);

        return view('dash.team.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $member = Team::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|min:3',
            'job_title' => 'required|min:3',
            'about' => 'required|min:5',
            'image' => 'required',
        ]);
        try {

            $member->update([
                'name' => $validated['name'],
                'job_title' => $validated['job_title'],
                'about' => $validated['about'],
                'image' => $validated['image'],
            ]);
            if ($request->file('image')) {
                $distenation = 'storage/images/members/'.$member->image;
                if (File::exists($distenation)) {
                    File::delete($distenation);
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('storage/images/members/', $filename);
                $member['image'] = $filename;
            }
            $member->save();

            return redirect()->route('team.index')->with('success', 'Team member updated !');
        } catch (Exception $e) {
            return dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $distenation = 'storage/images/members/'.$team->image;
        if (File::exists($distenation)) {
            File::delete($distenation);
        }
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team member Deleted!');
    }
}
