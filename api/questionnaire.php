<?php

class Questionnaire {

    private $questions;

    // "category": "Entertainment: Board Games",
    //         "type": "multiple",
    //         "difficulty": "medium",
    //         "question": "In Chess, the Queen has the combined movement of which two pieces?",
    //         "correct_answer": "Bishop and Rook",
    //         "incorrect_answers": [
    //             "Rook and King",
    //             "Knight and Bishop",
    //             "King and Knight"
    //         ]

    public function buildResponse($response) {
        $this->questions = $response->results;
    }

    public function getQuestions() {
        return $this->questions;
    }
}