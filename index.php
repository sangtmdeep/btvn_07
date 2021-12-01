<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Bai 2
    $userListInput = [
        [
            "username" => "Karl",
            "language" => "en"
        ], [
            "username" => "Tam",
            "language" => "vi"
        ], [
            "username" => "Kazuki",
            "language" => "ja"
        ]
    ];

    function getWelcomeMessage($username ,$userListInput){
        $mess = "";
        foreach($userListInput as $user){
            if($username === $user['username']){
                if($user['language'] === 'vi'){
                    $mess = 'Xin chao ' .$username;
                }
                elseif($user['language'] === 'ja'){
                    $mess = 'Konichiwa ' .$username;
                }
                elseif($user['language'] === 'en'){
                    $mess = 'Hello ' .$username;
                }
                else{
                    $mess = 'Not user!';
                }
                break;
            }
            else{
                $mess = 'Not name!';
            }
        }
        return $mess;
    }

    echo getWelcomeMessage("Kazuki", $userListInput)."<br>";
    echo getWelcomeMessage("Tam", $userListInput)."<br>";
    echo getWelcomeMessage("Karl", $userListInput)."<br>";
    echo getWelcomeMessage("Deep", $userListInput)."<br>";
    ?>
</body>

</html>