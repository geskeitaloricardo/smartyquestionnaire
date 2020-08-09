<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<script href="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>

{include file='header.tpl' page_title={$smarty.const.MY_TITLE}}

<div class="container">
    <div class="card mt-4">
        <div class="card-body">
        <form action="/loading" method="GET">
            <input type="hidden" name="hasCache" value="{$hasCache}">
            <div class="form-group">
                <label for="selectCategory">Category</label>
                <select name="category" class="form-control" id="selectCategory">
                    <option value="">Any Category</option>
                    <option value="9">General Knowledge</option>
                    <option value="10">Entertainment: Books</option>
                    <option value="11">Entertainment: Film</option>
                    <option value="12">Entertainment: Music</option>
                    <option value="13">Entertainment: Musicals &amp; Theatres</option>
                    <option value="14">Entertainment: Television</option>
                    <option value="15">Entertainment: Video Games</option>
                    <option value="16">Entertainment: Board Games</option>
                    <option value="17">Science &amp; Nature</option>
                    <option value="18">Science: Computers</option>
                    <option value="19">Science: Mathematics</option>
                    <option value="20">Mythology</option>
                    <option value="21">Sports</option>
                    <option value="22">Geography</option>
                    <option value="23">History</option>
                    <option value="24">Politics</option>
                    <option value="25">Art</option>
                    <option value="26">Celebrities</option>
                    <option value="27">Animals</option>
                    <option value="28">Vehicles</option>
                    <option value="29">Entertainment: Comics</option>
                    <option value="30">Science: Gadgets</option>
                    <option value="31">Entertainment: Japanese Anime &amp; Manga</option>
                    <option value="32">Entertainment: Cartoon &amp; Animations</option>
                </select>
            </div>

            <div class="form-group mt-2">
                <label for="selectDifficulty">Difficulty</label>
                <select name="difficulty" class="form-control" id="selectDifficulty">
                    <option value="">Any Difficulty</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
            </div>

            <button type="submit" class="btn btn-light btn-block mt-4" name="mode" value="new">Start New One</button>
            {if $hasCache}
                <button type="submit" class="btn btn-light btn-block mt-4" name="mode" value="continue">Continue</button>
            {/if}
        </form>
    </div>
</div>