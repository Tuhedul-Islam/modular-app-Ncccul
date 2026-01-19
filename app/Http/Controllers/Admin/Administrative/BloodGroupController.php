<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\BloodGroup;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class BloodGroupController extends Controller
{
    public function index()
    {
        $blood_groups = BloodGroup::latest()->get();
        $max_priority = (BloodGroup::max('priority') ?? 0) + 1;

        return view('admin.administrative.blood-group.index',compact('blood_groups', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:10|unique:blood_groups,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            BloodGroup::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Blood Group Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $blood_group = BloodGroup::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:10|unique:blood_groups,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $blood_group->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Blood Group Updated Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $blood_group = BloodGroup::findOrFail($request->id);
        $blood_group->delete();

        return response()->json(['success' => true]);
    }
}
