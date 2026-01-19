<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\OccupationType;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class OccupationTypeController extends Controller
{
    public function index()
    {
        $occupationTypes = OccupationType::latest()->get();
        $max_priority = (OccupationType::max('priority') ?? 0) + 1;

        return view('admin.administrative.occupation-type.index', compact('occupationTypes', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:occupation_types,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            OccupationType::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Occupation Type Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $occupationType = OccupationType::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:occupation_types,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $occupationType->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Occupation Type Updated Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $occupationType = OccupationType::findOrFail($request->id);
        $occupationType->delete();

        return response()->json(['success' => true]);
    }
}
