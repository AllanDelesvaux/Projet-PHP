<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="./output.css" rel="stylesheet">
        <title>My sweet MVC</title>

    </head>
    <body>
        <?php Vue::montrer('standard/entete'); ?>
        <?php Vue::montrer('standard/composant/formulaire'); ?>
        <?php echo $A_vue['helloworld'] ?>
        <?php Vue::montrer('standard/pied'); ?>
    </body>
</html>