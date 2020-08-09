{*
  これはコメントです。
  別ファイルで定義したヘッダを読み込み。
  このページのタイトルを定数で指定
*}

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<script href="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>

{include file='header.tpl' page_title={$smarty.const.MY_TITLE}}

<div class="container">
  {if isset($is_correct)}
    {if $is_correct}
      <div class="alert alert-success mt-4" role="alert">
        Correct answer
      </div>
    {else}
      <div class="alert alert-danger mt-4" role="alert">
        Wrong answer
      </div>
    {/if}
  {/if}
  <div class="card">
    <div class="card-header">
      {$category}
    </div>
    <div class="card-body">
      <p class="card-text">{$question}</p>
      {foreach $answers as $answer}
        {if isset($answer)}
          <form action="/question">
            <input type="hidden" value="{$answer}" name="answer">
            <button class="btn btn-light btn-block">{$answer}</button>
          </form>
        {/if}
      {/foreach}
      <p class="card-text">Score: {$score}</p>
    </div>
  </div>
</div>