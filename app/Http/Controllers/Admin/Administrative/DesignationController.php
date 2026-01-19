<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\Designation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::latest()->get();
        $max_priority = (Designation::max('priority') ?? 0) + 1;
        return view('admin.administrative.designation.index', compact('designations', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:designations,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            Designation::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Designation Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $designation = Designation::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:designations,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $designation->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Designation Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $designation = Designation::findOrFail($request->id);
        $designation->delete();

        return response()->json(['success' => true]);
    }
}
