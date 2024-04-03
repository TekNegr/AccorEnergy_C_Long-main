<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCORENER_GESTION</title>
</head>
<body>
    <?php require_once "./App/Controllers/AppHandler.php";?>
    <?php $app = new AppHandler();?>
    <?php if(!isset($_SESSION)) { $app->init(); }?>
    
    <div id="page-container">
        <!-- I have an issue that says that the body is misplaced!!! -->
    </div>
</body>
</html>