<?php

require_once 'vendor/autoload.php';
require_once 'router/router.php';
require_once 'api/questionnaireApi.php';
require_once 'cache/cache.php';

ini_set('date.timezone', 'Asia/Tokyo');
define('MY_TITLE', 'このページのタイトル');

// Router初期化
// Switch使うがいいかも・かっこよくする
$router = new Router();

// Smarty初期化
// TODO: かっこよく
$smarty = new Smarty();

$questionnarie = new QuestionnaireApi();

if ($router->getIndex() == $router::LOADING) {
    print($_GET['mode']);
    if ($_GET['mode'] == "new") {
        $questionnarie->build();
        $questions = $questionnarie->getQuestions();
        Cache::store($questions, Cache::QUESTIONS);
        Cache::store(0, Cache::INDEX);
        Cache::store(0, Cache::SCORE);
    }
    $router->redirect($router::QUESTION);

} elseif ($router->getIndex() == $router::START) {
    $smarty->assign('hasCache', Cache::exists(Cache::QUESTIONS));
    $smarty->display('start.tpl');

} elseif ($router->getIndex() == $router::QUESTION) {
    if (!Cache::exists(Cache::INDEX)) {
        Cache::store(0, Cache::INDEX);
    }

    if (!Cache::exists(Cache::SCORE)) {
        Cache::store(0, Cache::SCORE);
    }

    $questions = Cache::get(Cache::QUESTIONS);
    $index = Cache::get(Cache::INDEX);
    $score = Cache::get(Cache::SCORE);
    $isCorrect = null;

    if ($index + 1 >= count($questions)) {
        $router->redirect($router::END);
    }

    if (isset($_GET['answer'])) {
        if ($questions[$index]->correct_answer == $_GET['answer']) {
            $score += 1;
            $isCorrect = true;
        } else {
            $isCorrect = false;
        }

        $index += 1;
    }

    Cache::store($index, Cache::INDEX);
    Cache::store($score, Cache::SCORE);

    $allAnswers = $questions[$index]->incorrect_answers;
    $allAnswers[] = $questions[$index]->correct_answer;
    shuffle($allAnswers);
    
    $smarty->assign('category', $questions[$index]->category);
    $smarty->assign('question', $questions[$index]->question);
    $smarty->assign('answers', $allAnswers);
    $smarty->assign('score', $score);
    $smarty->assign('is_correct', $isCorrect);
    
    $smarty->display('index.tpl');

} elseif ($router->getIndex() == $router::END) {
    $score = Cache::get(Cache::SCORE);
    $smarty->assign('final_score', $score);
    Cache::clear();
    $smarty->display('final.tpl');
}