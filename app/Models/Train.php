<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getDepartureTime() {
        $timeString = $this->departure_time;
        return substr($timeString, 0, 5);
        
    }
    public function getArrivalTime() {
        $timeString = $this->arrival_time;
        return substr($timeString, 0, 5);
        
    }

    public function getTrainCode() {
        $prefixes = ['FN', 'FR', 'REG', 'IC'];
        $randomPrefix = $prefixes[array_rand($prefixes)];
        return $randomPrefix . ' ' . $this->train_code;
    }

    public function getDate() {
        $date = $this->departure_date;
        return date('d-m-Y', strtotime($date));
        
    }
}
