<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Client;

use App\Image;

class GetMarsImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $_apiKey = "-";
    private $_date;
    private $_rj;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $date, \App\RequestJob $rj)
    {
        $this->_date = $date;
        $this->_rj = $rj;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $count = \App\Image::where('date', $this->_date)->count();
        if ($count <= 0) {

            $client = new Client();
            $req = $client->request('GET', 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date='.$this->_date.'&api_key=' . $this->_apiKey);

            $res = json_decode($req->getBody());
            
            foreach($res->photos as $photo) {
                $image = new Image;

                $image->date = $photo->earth_date;
                $image->source = $photo->img_src;

                $image->save();
            }
        }

        $rj = \App\RequestJob::find($this->_rj->id);
        $rj->status = 1;
        $rj->save();
    }
}
