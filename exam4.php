<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam :)</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>PHP exam4</h1><hr/>
    <label>Class 89!!!</label>
    <form method="get" action="">
        <input type="text" name="solutions"/>
        <input type="submit"/>
    </form>
    <?php
        //send to page title for the result
        echo "<br/>your search result array:<hr/><br/>";
        $url = "https://www.google.co.il/search?q=".str_replace(' ','%20',$_GET['solutions']);

        //create instance of curl
        $ch = curl_init();

        //give the url that we want to get
        curl_setopt($ch,CURLOPT_URL,$url);

        //return result in json format
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

        //tell the web which server send the command
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com');

        //execute the command
        $debs = curl_exec($ch);

        //close the connection
        curl_close($ch);

        //encode to hebrew/russion/arabic/etc...
        $mySolution = utf8_encode($debs);

        //show the result
        echo $mySolution;
    ?>
</body>
</html>