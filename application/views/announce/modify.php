<html>
    <head>
        <meta charset="utf-8">
        <title>2022-06 試題</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/body.css' rel='stylesheet' />
    </head>
    <body>
        <div class="content">
            <h3>公佈欄 - 修改</h3>
            <input type="hidden" name='idTemp' value="<?php echo $id; ?>" />
            <form method='post' action='/announce/modify/<?php echo $id; ?>' class='form1' enctype="multipart/form-data">
                <h5>標題</h5>
                <p> <input type="text" name="title" /> </p>
                <h5>內容</h5>
                <p> <textarea name="content" ></textarea> </p>
                <p class=""> <button class="btn">修改</button> </p>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/lib/jquery-validation/dist/localization/messages_zh_TW.min.js"></script>
    <script src="/js/announce/modify.js"></script>
</html>
