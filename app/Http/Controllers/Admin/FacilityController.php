<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $users = User::withCount('activeShifts')->where('role', 'facility_mode')
            ->when($request->search, function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('full_name', 'like', '%' . $request->search . '%')
                        ->orWhere('email', 'like', '%' . $request->search . '%')
                        ->orWhere('phone_number', 'like', '%' . $request->search . '%');
                });
            })
            ->latest()
            ->paginate(10);
        return view('pages.admin.facilities', compact('users'));
    }

    public function destroy($id)
    {
        try {
            $user = User::where('role', 'facility_mode')->findOrFail($id);
            $user->delete();

            return redirect()->route('admin.facilities.index')
                ->with('success', 'User deleted successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
