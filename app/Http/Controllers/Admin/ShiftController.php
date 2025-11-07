<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClaimShift;
use App\Models\Shift;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::with('claimShift', 'claimShift.user')->latest()->paginate(10);
        // $claimedShifts = ClaimShift::with('shift', 'user')->where('check_out', '00:00:00')->where('check_in', '!=', '00:00:00')->latest()->get();

        $claimedShifts = ClaimShift::with('shift', 'user')
            ->where('check_out', '00:00:00')
            ->where('check_in', '!=', '00:00:00')
            ->latest()
            ->get()
            ->map(function ($item) {
                $shiftStart = Carbon::parse($item->shift->start_time);
                $shiftEnd = Carbon::parse($item->shift->end_time);
                $checkIn = Carbon::parse($item->check_in);
                $now = Carbon::now();

                // 🕐 Fix: Handle overnight shift (e.g., 9 PM → 3 AM)
                if ($shiftEnd->lessThan($shiftStart)) {
                    $shiftEnd->addDay();
                }

                // 🧮 Calculate shift duration status
                if ($now->lessThan($shiftEnd)) {
                    // Shift still in progress
                    $item->status = 'In Progress';
                    $item->duration = $checkIn->diffForHumans($now, true); // e.g. "9 minutes"
                    $item->overtime = null;
                } else {
                    // Shift ended but no checkout
                    $item->status = 'Awaiting Checkout';
                    $item->duration = $checkIn->diffForHumans($shiftEnd, true);
                    $item->overtime = $shiftEnd->diffForHumans($now, true);
                }

                return $item;
            });

        return view('pages.admin.shifts', compact('shifts', 'claimedShifts'));
    }

    public function approved($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            $shift->status = 1;
            $shift->save();
            return redirect()->back()->with('success', 'Shift Approved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }

    public function cancelled($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            $shift->status = -1;
            $shift->save();
            return redirect()->back()->with('success', 'Shift Cancelled Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            $shift->delete();
            return redirect()->back()->with('success', 'Shift Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }
}
