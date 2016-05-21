<?php
class TelegramBotApi {
    private $url = "";
    
    function __construct() {
        $this->url = TBOT_URL . "bot" . TBOT_NUM . ":" . TBOT_KEY;
    }
    
    public function getUpdates() {
        $method = $this->url . "/getUpdates";
        // Create a stream
        $opts = array(
          'http'=>array(
            'method'=>"POST"
          )
        );

        $context = stream_context_create($opts);

        // Open the file using the HTTP headers set above
        return file_get_contents($method, false, $context);
    }
}
?>