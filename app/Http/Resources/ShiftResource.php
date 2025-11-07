<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShiftResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'special_instruction' => $this->special_instruction,
            'start_time' => \Carbon\Carbon::parse($this->start_time)->format('g:i A'),
            'end_time' => \Carbon\Carbon::parse($this->end_time)->format('g:i A'),
            'per_hour' => $this->pay_per_hour . '$',
            'location' => $this->location,
            'license_type' => $this->license_type,
            'status' => $this->status,
            'status_text' => $this->getStatusText($this->status),
            'is_claimed' => $this->claimShift?->status == 'claimed' ? 'Claimed' : 'Claim',
        ];
    }

    private function getStatusText($status)
    {
        return match ($status) {
            0 => 'Pending Approval',
            1 => 'Approved',
            2 => 'Confirmed',
            3 => 'In Progress',
            4 => 'Completed',
            -1 => 'Cancelled',
            default => 'Unknown',
        };
    }
}
