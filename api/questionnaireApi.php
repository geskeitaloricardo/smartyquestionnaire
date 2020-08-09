<?php

require_once 'questionnaire.php';

class QuestionnaireApi extends Questionnaire {

    private $amount = 10;
    private $requestUrl = 'https://opentdb.com/api.php';

    public function build() {
        $url = $this->requestUrl . '?amount=' . $this->amount;
        
        $query = [];

        if ($_GET["difficulty"] != ""){
            $query["difficulty"] = $_GET["difficulty"];
        }

        if ($_GET["category"] != "") {
            $query["category"] = $_GET["category"];
        }

        if (!empty($query)) {
            $url .= '&' . http_build_query($query);
        }

        return $this->buildResponse($this->callApi($url));
    }

    private function callApi($url){
        $result = file_get_contents($url);
        return json_decode($result);
    }
}