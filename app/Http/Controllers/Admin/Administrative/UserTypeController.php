<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\UserType;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Throwable;

class UserTypeController extends Controller
{
    public function index()
    {
        $user_types = UserType::latest()->get();
        $max_priority = (UserType::max('priority') ?? 0) + 1;
        return view('admin.administrative.user-type.index', compact('user_types', 'max_priority'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'   => 'required|string|max:255|unique:user_types,name',
                'status' => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            UserType::create([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Added Successfully");
            return redirect()->back();

        } catch (Throwable $e) {

            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $user_types = UserType::findOrFail($id);

        try {
            $request->validate([
                'name'   => 'required|string|max:255|unique:user_types,name,' . $id,
                'status' => 'required|integer',
                'priority' => 'required|integer|min:1',
            ]);

            $user_types->update([
                'name'     => $request->name,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success("Updated Successfully");
            return redirect()->back();

        } catch (Throwable $e) {

            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $user_types = UserType::findOrFail($request->id);
        $user_types->delete();

        return response()->json(['success' => true]);
    }
}
