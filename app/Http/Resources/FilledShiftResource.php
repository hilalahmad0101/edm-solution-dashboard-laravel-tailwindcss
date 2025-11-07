<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilledShiftResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $checkIn = $this->claimShift?->check_in ? \Carbon\Carbon::parse($this->claimShift?->check_in) : null;
        $checkOut = $this->claimShift?->check_out ? \Carbon\Carbon::parse($this->claimShift?->check_out) : null;

        $start = \Carbon\Carbon::parse($this->start_time);
        $end = \Carbon\Carbon::parse($this->end_time);

        // If end time is before start time, it means shift ended next day
        if ($end->lessThan($start)) {
            $end->addDay();
        }

        $totalHours = $start->diffInHours($end);

        // Calculate worked time
        $workedTime = null;
        if ($checkIn && $checkOut) {
            if ($checkOut->lessThan($checkIn)) {
                $checkOut->addDay();
            }

            $workedMinutes = $checkIn->diffInMinutes($checkOut);
            $workedHours = intdiv($workedMinutes, 60);
            $workedMins = $workedMinutes % 60;

            $workedTime = sprintf('%d hr %d min', $workedHours, $workedMins);
        }

        $dutyDate = \Carbon\Carbon::parse($this->date)->format('M j, Y');
        $dutyStart = \Carbon\Carbon::parse($this->start_time)->format('H:i');
        $dutyEnd = \Carbon\Carbon::parse($this->end_time)->format('H:i');

        return [
            'special_instruction' => $this->special_instruction,
            'duty_time' => sprintf(
                '%s • %s — %s • %d hr%s',
                $dutyDate,
                $dutyStart,
                $dutyEnd,
                $totalHours,
                $workedTime ? " (Worked: $workedTime)" : ''
            ),
            'result' => $this->status == 4 ? 'Waiting' : ($this->status == 5 ? 'Completed' : 'Paid'),
        ];
    }
}
