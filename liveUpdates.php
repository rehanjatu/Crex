<?php
// ======================================
// Codevix Live Cricket Updates
// ======================================

// Live Updates Array
$updates = [

    [
        "time" => "10:15 AM",
        "update" => "🏏 Virat Kohli hits a brilliant FOUR through covers."
    ],

    [
        "time" => "10:20 AM",
        "update" => "🔥 WICKET! Rohit Sharma caught at deep mid-wicket."
    ],

    [
        "time" => "10:28 AM",
        "update" => "⚡ Hardik Pandya smashes SIX over long-on."
    ],

    [
        "time" => "10:35 AM",
        "update" => "📢 Strategic timeout taken by Team India."
    ],

    [
        "time" => "10:42 AM",
        "update" => "💯 India crosses 150 runs mark."
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Live Cricket Updates</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#0f172a;
            color:white;
            padding:30px;
        }

        h1{
            text-align:center;
            color:#38bdf8;
            margin-bottom:40px;
        }

        .updates-container{
            max-width:800px;
            margin:auto;
        }

        .update-card{
            background:#1e293b;
            padding:20px;
            margin-bottom:20px;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,0.4);
            border-left:5px solid #38bdf8;
            transition:0.3s;
        }

        .update-card:hover{
            transform:translateX(5px);
        }

        .time{
            font-size:14px;
            color:#94a3b8;
            margin-bottom:10px;
        }

        .text{
            font-size:18px;
            line-height:1.6;
        }

    </style>

</head>

<body>

    <h1>📢 Live Cricket Updates</h1>

    <div class="updates-container">

        <?php foreach($updates as $item): ?>

            <div class="update-card">

                <div class="time">
                    <?php echo $item['time']; ?>
                </div>

                <div class="text">
                    <?php echo $item['update']; ?>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

</body>

</html>