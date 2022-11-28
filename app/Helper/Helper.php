<?php

namespace App\Helper;


trait Helper
{
    static function checkAttendance() {
        $attendances = [];
        if(auth('student')->check()) {
            foreach(auth('student')->user()->attendance as $a) {
                array_push($attendances,$a->id);
            }
        }
        return $attendances;
    }
}
