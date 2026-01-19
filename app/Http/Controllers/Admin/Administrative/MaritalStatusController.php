<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\MaritalStatus;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class MaritalStatusController extends Controller
{
    public function index()
    {
        $marital_statuses = MaritalStatus::latest()->get();
        $max_priority = (MaritalStatus::max('priority') ?? 0) + 1;

        return view('admin.administrative.marital-status.index',compact('marital_statuses', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:50|unique:marital_statuses,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            MaritalStatus::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Marital Status Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $marital_status = MaritalStatus::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:50|unique:marital_statuses,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $marital_status->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Marital Status Updated Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $marital_status = MaritalStatus::findOrFail($request->id);
        $marital_status->delete();

        return response()->json(['success' => true]);
    }
}
