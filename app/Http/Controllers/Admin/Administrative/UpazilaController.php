<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\District;
use App\Models\Administrative\Upazila;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class UpazilaController extends Controller
{
    // Show all divisions
    public function index()
    {
        // $upazilas = Upazila::latest()->get();
        // $upazilas = Upazila::with('district.division')->latest()->get();
        $upazilas = Upazila::with('district')->latest()->get();
        $district = District::orderBy('name')->get();
        // $divisions = Division::orderBy('name')->get();
        $max_priority = (Upazila::max('priority') ?? 0) + 1;
        return view('admin.administrative.upazila.index', compact('upazilas', 'max_priority', 'district'));
    }

    // Store new division
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:upazilas,name',
                'district_id' => 'nullable|integer',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            Upazila::create([
                'name'     => $request->name,
                'district_id' =>$request->district_id,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Upazila Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Update existing division
    public function update(Request $request, $id)
    {
        $upazila = Upazila::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:upazilas,name,' . $id,
                'district_id' => 'nullable|integer',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $upazila->update([
                'name'     => $request->name,
                'district_id' =>$request->district_id,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Upazila Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Delete division
    public function destroy(Request $request)
    {
        $upazila = Upazila::findOrFail($request->id);
        $upazila->delete();

        return response()->json(['success' => true]);
    }
}
