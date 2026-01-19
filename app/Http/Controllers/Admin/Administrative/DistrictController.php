<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\District;
use App\Models\Administrative\Division;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class DistrictController extends Controller
{
    // Show all districts
    public function index()
    {
        $districts = District::with('division')->latest()->get();
        $divisions = Division::orderBy('name')->get();
        $max_priority = (District::max('priority') ?? 0) + 1;
        return view('admin.administrative.district.index', compact('districts', 'max_priority', 'divisions'));
    }

    // Store new district
    public function store(Request $request)
    {
        try {
            $request->validate([

                'priority' => 'required|integer|min:1',
                'name'     => 'required|string|max:255|unique:districts,name',
                'division_id' => 'required|exists:divisions,id',
                'status'   => 'required|integer',
            ]);

            District::create([
                'name'     => $request->name,
                'division_id' => $request->division_id,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("District Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Update existing district
    public function update(Request $request, $id)
    {
        $district = District::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:districts,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $district->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("District Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // Delete district
    public function destroy(Request $request)
    {
        $district = District::findOrFail($request->id);
        $district->delete();

        return response()->json(['success' => true]);
    }
}
