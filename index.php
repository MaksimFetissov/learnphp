<?php
// code author

class Job {
    public function task(Logger $logger){
        for($i=0;$i<10;$i++){
            $logger->log("Task $i complete!");  
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}


// code user
class FileLogger implements Logger {
    public function log($message){
        $file = fopen('./log.txt', 'a');
        fwrite($file, $message. "\n");
        fclose($file);
    }
}

class NothingLogger implements Logger {
    public function log($message){

    }
}

$job = new Job();
$logger = new NothingLogger();
$job->task($logger);