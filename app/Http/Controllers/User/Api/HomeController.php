<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function shifts()
    {
        try {
            $shifts = Shift::latest()->get();
            return response()->json([
                'success' => true,
                'data' => $shifts
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
                'data' => $shift
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
