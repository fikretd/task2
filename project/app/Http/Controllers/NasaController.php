<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\GetMarsImages;
use Queue;

class NasaController extends Controller
{
    public function call(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        if ($from && $to) {
            // add date into the queue for each request
            try {
                $from = new \DateTime($from);
                $to = new \DateTime($to);

                $diff = $to->diff($from)->format('%a');

                $r = new \App\Request;
                $r->from = $from->format('Y-n-j');
                $r->to = $to->format('Y-n-j');
                $r->save();

                for ($i = 0; $i <= $diff; $i++) {

                    $rj = new \App\RequestJob;
                    $rj->request_id = $r->id;
                    $rj->day = $i+1;
                    $rj->status = 0;
                    $rj->save();

                    Queue::push(new GetMarsImages($from->format('Y-n-j'), $rj));
                    $from = $from->modify('+1 day');
                }
            }
            catch(Exception $e) {
                //
            }
        }
    }

    public function flush(Request $request)
    {
        \DB::table('jobs')->delete();
        \DB::table('requests')->delete();
        \DB::table('request_jobs')->delete();
        \DB::table('images')->delete();
    }
}
