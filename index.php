<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Prraming Typing Game</title>
        <link rel="stylesheet" href="asset/css/styles.css">
    </head>
    <body>
        <main>
            <article class="game">
                <p id="target">&gt; Click to Start</p>
                 <p class="info">
                     Letter count: <span id="score">0</span>,
                     Miss count: <span id="miss">0</span>,
                     Time Left: <span id="timer">0</span>,
                 </p>
            </article>
        </main>

        <article class="add_woeds">
            <form action="update.php" method="post">
                <input
                type="text"
                placeholder="ADD TYPING WORD"
                valu=""
                >
                <button type="submit">ADD</button>
            </form>
        </article>

    <script src="asset/js/main.js"></script>
    </body>
</html>
