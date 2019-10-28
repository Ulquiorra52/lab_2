<?php session_start();
$words = [
    'ru' => ['zag' => "Главное меню", 'priv' => "Вас приветствует этот сайт!", 'but1' => "Изменить", 'but2' => "Выйти", 'but3' => ""],
    'en' => ['zag' => "Main menu", 'priv' => "This site welcomes you!", 'but1' => "Change", 'but2' => "Logout", 'but3' => ""],
    'ua' => ['zag' => "Головне меню", 'priv' => "Вас вітає цей сайт!", 'but1' => "Змінити", 'but2' => "Вийти", 'but3' => ""],
    'it' => ['zag' => "Menu principale", 'priv' => "Questo sito ti dà il benvenuto!", 'but1' => "Emendare", 'but2' => "Disconnettersi", 'but3' => ""],
];

if (empty($_POST['lang'])) {
} else {
    $_SESSION['lang'] = $_POST['lang'];
}
function trans($lang, $words)
{
    return $words[$_SESSION['lang']][$lang];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab2-Hello</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .inner {
            margin: 0 auto;
            width: 30em;
        }</style>
    <style>
        .left {
            margin-left: 70%;
            width: 30em;
        }</style>
</head>
<body class="GOOD">
<br>
<div class="left">
    <table>
        <td width="80%">
            <form class="form" method="post" action="Hello.php">
                <div class="input">
                    <select name="lang" class="dropdown">
                        <?php foreach ($words as $lang => $type) { ?>
                            <option value="<?php echo $lang ?>" <? if ($lang == $_SESSION['lang']) {
                                echo 'selected';
                            } ?>><?php echo $lang ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="button"
                        type="submit"><?php echo trans('but1', $words); ?></button>
            </form>
        </td>
        <td>
            <form class="form" action="logout.php">
                <button class="button"
                        type="submit"><?php echo trans('but2', $words); ?></button>
            </form>
        </td>
    </table>
</div>
<br>
<br>
<div class="inner">
    <h2 class="header">
        <?php echo trans('zag', $words); ?>
    </h2>

    <div class="tug">
        <h1 class="=header">
            <?php echo $_SESSION['login']; ?>
            <br>
            <?php
            echo trans('priv', $words);
            ?></h1>
        <br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
