<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Sumoselect test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.sumoselect.js"></script>
    <link href="sumoselect.css" rel="stylesheet"/>

    <script type="text/javascript">
        $(function () {
            $('.js-bind-sumoselect').SumoSelect({
                placeholder: 'Placeholder',
                search: true,
                selectAll: true,
                forceCustomRendering: true,
                floatWidth: 0
            });
        });
    </script>
    <style type="text/css">
        html {
            height: 100%;
        }
        body {
            min-height: 100%;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #444;
            font-size: 13px;
            display: flex;
            flex-direction: column;
            margin: 0;
            align-items: center;
            justify-content: center;
        }

        p, div, ul, li {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            display: flex;
            width: 500px;
            padding: 40px;
            background: #efefef;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <select name="select" class="js-bind-sumoselect" onclick="console.log($(this).val())" multiple onchange="console.log('change is firing')">
        <?php for ($i = 1; $i <= 1000; $i++): ?>
            <option value="<?php echo $i; ?>">Option <?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
</div>

</body>
</html>
