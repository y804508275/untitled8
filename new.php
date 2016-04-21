<html>
<head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8">
    <meta content="width=device-width,user-scalable=no" name="viewport">
    <script src="jquery-1.12.3.min.js" type="text/javascript"></script>
    <title></title>
    <script>
        function filechange(){
            document.getElementById("uploadForm").submit();
        }

    </script>
</head>
<body>

<form  id="uploadForm" action="NewVersion/save.php" enctype="multipart/form-data" method="post" target="winupload">

    <input type="file" name="pic" id="fileid" value="" onchange="filechange()">

</form>
<form  id="uploadForm" action="upload.php"  method="post">

<input type="submit" name="submit" value="注册">
    </form>
<iframe name="winupload">

</iframe>
<div id="uploadimg"></div>



</body>
</html>
