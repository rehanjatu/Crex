<?php
// ==========================================
// Codevix Cricket Score Tracker
// ==========================================

// Match Data
$matches = [
    [
        "team1" => "India",
        "team2" => "Australia",
        "score" => "245/6",
        "overs" => "42.3",
        "status" => "India need 56 runs in 45 balls"
    ],

    [
        "team1" => "CSK",
        "team2" => "MI",
        "score" => "189/4",
        "overs" => "20.0",
        "status" => "CSK won by 18 runs"
    ],

    [
        "team1" => "RCB",
        "team2" => "KKR",
        "score" => "120/2",
        "overs" => "13.1",
        "status" => "RCB batting"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Live Cricket Score Tracker</title>

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
            margin-bottom:40px;
            color:#38bdf8;
        }

        .matches{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:25px;
        }

        .match-card{
            background:#1e293b;
            padding:25px;
            border-radius:15px;
            box-shadow:0 4px 12px rgba(0,0,0,0.4);
            transition:0.3s;
        }

        .match-card:hover{
            transform:translateY(-5px);
        }

        .teams{
            font-size:24px;
            margin-bottom:15px;
        }

        .score{
            font-size:38px;
            font-weight:bold;
            color:#22c55e;
            margin-bottom:10px;
        }

        .overs{
            color:#cbd5e1;
            margin-bottom:10px;
        }

        .status{
            background:#334155;
            padding:10px;
            border-radius:8px;
            color:#facc15;
        }

    </style>

</head>

<body>

    <h1>🏏 Live Cricket Score Tracker</h1>

    <div class="matches">

        <?php foreach($matches as $match): ?>

            <div class="match-card">

                <div class="teams">
                    <?php echo $match['team1']; ?>
                    vs
                    <?php echo $match['team2']; ?>
                </div>

                <div class="score">
                    <?php echo $match['score']; ?>
                </div>

                <div class="overs">
                    Overs: <?php echo $match['overs']; ?>
                </div>

                <div class="status">
                    <?php echo $match['status']; ?>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

</body>
</html>