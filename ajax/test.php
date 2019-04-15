<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <style type="text/css">
        #generated_content{
            border: 1px solid black;
            width: 300px;
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<button onclick="AjaxLoad();">Run</button>

<p><strong>Ajax grabbed plain text:</strong></p>
<div id="generated_content">&nbsp;</div>
</body>

<script type="text/javascript">
    function AjaxLoad() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'animals.xml', true);
        xhr.send(null);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                var message = '';
                if (xhr.status == 200) {
                    message = '<pre>' + xhr.responseText + '</pre>';
                } else {
                    message = 'An error';
                }
                document.getElementById('generated_content').innerHTML = message;
            }
        }
    }
</script>
</html>