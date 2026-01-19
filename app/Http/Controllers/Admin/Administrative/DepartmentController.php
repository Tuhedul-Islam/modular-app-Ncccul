<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\Department;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::latest()->get();
        $max_priority = (Department::max('priority') ?? 0) + 1;
        return view('admin.administrative.department.index', compact('departments', 'max_priority'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:departments,name',
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            Department::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Department Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        try {
            $request->validate([
                'name'     => 'required|string|max:255|unique:departments,name,' . $id,
                'status'   => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $department->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Department Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $department = Department::findOrFail($request->id);
        $department->delete();

        return response()->json(['success' => true]);
    }
}
