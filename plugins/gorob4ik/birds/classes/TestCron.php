<?php
namespace Gorob4ik\Birds\Classes;


use Log;

class TestCron
{
    public function fire($job, $data)
    {
        Log::error("test cron!!! /n");
        $job->delete();
    }


}