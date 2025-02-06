<?php

namespace App\Http\Services;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingService
{
    public function availableRooms($fromDate = null, $toDate = null)
    {
        // If $toDate is not provided, set it equal to $fromDate
        if ($toDate === null) {
            $toDate = $fromDate;
        }

        return DB::table(Room::getTableName() . ' as r')
            ->leftJoin(Booking::getTableName() . ' as b', function ($query) use ($fromDate, $toDate) {
                $query->on('r.uuid', '=', 'b.room_id')
                    ->whereDate('b.start_date', '<=', $fromDate)
                    ->whereDate('b.end_date', '>=', $toDate);
            })
            ->whereNull('b.room_id') // Filter rooms without bookings during the date range
            ->select('r.*')
            ->distinct()
            ->get();
    }
}
