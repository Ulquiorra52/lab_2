<?php session_start();
$lang = [
    'ru' => "Русский",
    'en' => "English",
    'ua' => "Ukrainian",
    'it' => "Italiano",
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab2-Hello</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .inner {
            margin-left: auto;
            margin-right: auto;
            width: 28em;
        }</style>
</head>
<body class="lang">
<br>
<br>
<br>
<div class="inner">
    <h2 class=" header">
        Выбор языка
    </h2>

    <div class="gut">
        <h1 class="header">
            <?php echo $_SESSION['login']; ?>
            <br>
            This site welcomes you!<br><br>
            <form class="form" method="post" action="Hello.php">
                <div class="field">
                    <label>
                        <h2 class="header">Choose your language</h2>
                    </label>
                    <select name="lang" class="dropdown">
                        <?php foreach ($lang as $l => $type) { ?>
                            <option value="<?php echo $l ?>"><?php echo $type ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="button" type="submit">Change</button>
            </form>
        </h1>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>