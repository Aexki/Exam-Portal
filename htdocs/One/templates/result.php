<?php
    session_start();
    if(!$_SESSION['user']){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];
        header('Location: '.$uri.'/one/templates/login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Result : <?php echo $_SESSION['title'];?></title>
    <style>
        body {
            background-image: url('https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.freepptbackground.com%2Fwp-content%2Fuploads%2F2014%2F06%2Fcolored-lines-with-white-background.jpg&f=1&nofb=1');
        }

        .above {
            text-align: center;
            color: rgb(165, 42, 42);
            font-size: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .design {
            margin-top: 150px;
        }

        #tabl {
            width: 482.2pt;
            border-collapse: collapse;
            border: none;
            margin-left: auto;
            margin-right: auto;
        }

        tbody tr td p {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-bottom: .0001pt;
            margin-left: 0cm;
            line-height: normal;
            font-size: 15px;
            font-family: "Calibri", "sans-serif";
            text-align: center;
        }

        tbody tr td {
            width: 127.8pt;
            border-top: solid #FFC000 1.0pt;
            border-left: none;
            border-bottom: solid #FFC000 1.0pt;
            border-right: none;
            padding: 0cm 5.4pt 0cm 5.4pt;
            height: 50.95pt;
        }
    </style>
</head>
<body>
    <div class="design">
        <h1 class="above" style="font-size: 35px;"><u>RESULT</u></h1>
        <?php
            echo '<h3 class="above">Exam : '.$_SESSION['title'].'</h3>';
            echo '<h3 class="above">Mark Scored : '.$_SESSION['mark'].'/5</h3>' ?>
        <br><br>
        <table id="tabl">
            <tbody>
                <tr>
                    <td>
                        <p>
                            <strong><span style="color:#BF8F00;">Total number of questions</span></strong>
                        </p>
                    </td>
                    <td>
                        <p>
                            <strong><span style="color:#BF8F00;">5</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width:354.4pt;border:none;background:#FFF2CC;padding:0cm 5.4pt 0cm 5.4pt;height:50.95pt;">
                        <p>
                            <strong><span style="color:#BF8F00;">Number of correct answers</span></strong>
                        </p>
                    </td>
                    <td
                        style="width:127.8pt;border:none;background:#FFF2CC;padding:0cm 5.4pt 0cm 5.4pt;height:50.95pt;">
                        <p>
                            <?php echo '<span style="color:#BF8F00;">'.$_SESSION['correct'].'</span>' ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            <strong><span style="color:#BF8F00;">Number of incorrect answers</span></strong>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo'<span style="color:#BF8F00;">'.$_SESSION['wrong'].'</span>' ?>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

