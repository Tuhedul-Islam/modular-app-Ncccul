<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\Gender;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::latest()->get();
        $max_priority = (Gender::max('priority') ?? 0) + 1;

        return view('admin.administrative.gender.index', compact('genders', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:genders,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            Gender::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Gender Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $gender = Gender::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:genders,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $gender->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Gender Updated Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $gender = Gender::findOrFail($request->id);
        $gender->delete();

        return response()->json(['success' => true]);
    }
}
