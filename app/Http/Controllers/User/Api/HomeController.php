<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClaimShiftRequest;
use App\Http\Resources\ShiftResource;
use App\Models\Shift;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function shifts()
    {
        try {
            $shifts = Shift::with('claimShift')->latest()->get();
            return response()->json([
                'success' => true,
                'data' => ShiftResource::collection($shifts)
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function shiftDetails($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => new ShiftResource($shift)
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function claimShift(ClaimShiftRequest $request)
    {
        try {
            $validated = $request->validated();
            $shift = Shift::findOrFail($validated['shift_id']);
            $user = auth()->user();
            if ($shift->claimShift()->where('user_id', $user->id)->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Shift already claimed'
                ]);
            }
            $shift->claimShift()->create([
                'user_id' => $user->id,
                'status' => 'claimed'
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Shift claimed successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function confirmVerification(ClaimShiftRequest $request)
    {
        try {
            $validated = $request->validated();
            $shift = Shift::findOrFail($validated['shift_id']);
            $user = auth()->user();
            if ($shift->confirmVerification()->where('user_id', $user->id)->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Shift already verification'
                ]);
            }
            $shift->confirmVerification()->create([
                'user_id' => $user->id,
                'signature' => $request->signature->store('signature', 'public'),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Shift Verification successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function checkOutShift(ClaimShiftRequest $request)
    {
        try {
            $validated = $request->validated();
            $shift = Shift::findOrFail($validated['shift_id']);
            $user = auth()->user();
            if ($shift->claimShift()->where('user_id', $user->id)->where('status', 'completed')->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Shift already checked out'
                ]);
            }
            $shift->claimShift()->where('user_id', $user->id)->update([
                'status' => 'completed'
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Shift checked out successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
