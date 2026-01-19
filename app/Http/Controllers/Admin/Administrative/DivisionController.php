<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\Division;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class DivisionController extends Controller
{
    // Show all divisions
    public function index()
    {
        $divisions = Division::latest()->get();
        $max_priority = (Division::max('priority') ?? 0) + 1;
        return view('admin.administrative.division.index', compact('divisions', 'max_priority'));
    }

    // Store new division
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:divisions,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            Division::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Division Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Update existing division
    public function update(Request $request, $id)
    {
        $division = Division::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:divisions,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $division->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Division Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Delete division
    public function destroy(Request $request)
    {
        $division = Division::findOrFail($request->id);
        $division->delete();

        return response()->json(['success' => true]);
    }
}
