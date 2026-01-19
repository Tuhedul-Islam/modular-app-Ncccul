<?php

namespace App\Http\Controllers\Admin\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Administrative\FinancialYear;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Throwable;

class FinancialYearController extends Controller
{
    /**
     * 🔹 READ (List page)
     */
    public function index()
    {

        $financialYears = FinancialYear::latest()->get();


        $max_priority = (FinancialYear::max('priority') ?? 0) + 1;

        return view('admin.administrative.financial-year.index', compact('financialYears','max_priority'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
               'priority' => 'required|integer|min:1',
                'name'     => 'required|string|max:255|unique:financial_years,name',
                'start_date' => 'required|date',
                'end_date'   => 'required|date|after:start_date',
                'is_current'  => 'required|boolean',
                'status'   => 'required|integer',
            ]);

            FinancialYear::create([
                'name'     => $request->name,
                'start_date' => Carbon::parse($request->start_date)->format('Y-m-d'),
                'end_date'   => Carbon::parse($request->end_date)->format('Y-m-d'),
                'is_current' => $request->is_current,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('Occupation Type Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            // dd($e);
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'priority' => 'required|integer|min:1',
    //         'name'     => 'required|string|max:255|unique:financial_years,name',
    //         'start_date'  => 'required|date',
    //         'end_date'    => 'required|date|after:start_date',
    //         'is_current'  => 'required|boolean',
    //         'status'   => 'required|integer',
    //     ]);

    //     try {


    //         if ($request->is_current == 1) {
    //             FinancialYear::where('is_current', 1)
    //                 ->update(['is_current' => 0]);
    //         }

    //         FinancialYear::create([
    //             'priority'    => $request->priority,
    //             'name'        => $request->name,
    //             'start_date'  => $request->start_date,
    //             'end_date'    => $request->end_date,
    //             'is_current'  => $request->is_current,
    //             'status'      => $request->status,
    //         ]);

    //         Toastr::success('Financial Year created successfully');
    //         return back();

    //     } catch (Throwable $e) {
    //         Toastr::error('Something went wrong');
    //         return back();
    //     }
    // }


     public function update(Request $request, $id)
    {
        $financialYear = FinancialYear::findOrFail($id);
        try {
            $request->validate([
               'priority' => 'required|integer|min:1',
               'name'     => 'required|string|max:255|unique:financial_years,name,' . $id,
                'start_date' => 'required',
                'end_date'   => 'required',
                'is_current'  => 'required|boolean',
                'status'   => 'required|integer',
            ]);

            $financialYear->update([
                'name'     => $request->name,
                 'start_date' => Carbon::parse($request->start_date)->format('Y-m-d'),
                'end_date'   => Carbon::parse($request->end_date)->format('Y-m-d'),
                'is_current' => $request->is_current,
                'status'   => $request->status,
                'priority' => $request->priority,
            ]);

            Toastr::success('FinancialYear Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * 🔹 DELETE
     */
    // public function destroy(Request $request)
    // {
    //     try {

    //         FinancialYear::findOrFail($request->id)->delete();

    //         return response()->json([
    //             'status' => true,
    //             'message' => 'Financial Year deleted successfully'
    //         ]);

    //     } catch (Throwable $e) {

    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Delete failed'
    //         ]);
    //     }
    // }
     // Delete division
    public function destroy(Request $request)
    {
        $financialYear = FinancialYear::findOrFail($request->id);
        $financialYear->delete();

        return response()->json(['success' => true]);
    }
}
