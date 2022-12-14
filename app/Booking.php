<?php

namespace App;
use App\Bus;
use App\BusSchedule;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['customer_id', 'bus_id', 'pid', 'schedule_id', 'seats_booked', 'total_price', 'status', 'source', 'destination'];
    protected $primaryKey = 'booking_id';

    protected $casts = [
        'seats_booked'  =>  'array',
    ];

    public function schedule()
    {
        return $this->belongsTo(BusSchedule::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function saveSeats()
    {
        $booking = Booking::all();
        foreach ($booking as $book) {
            $book->seats = array();
            if($book->schedule_id == $this->schedule_id){
                foreach ($this->seats_booked as $seat) {
                    array_push($book->seats, $seat);
                }   
                $book->seats = array_unique($book->seats);
            }
        }
        
    }
}