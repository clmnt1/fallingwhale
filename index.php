<?php
$sceneHeight = 25000;
$cloudNb = 8;
$layernb = 6;
$parallaxDegree = 2500;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Falling Whale</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/lib/jQuery-2.1.1.min.js"></script>
    <script src="js/lib/jquery.nicescroll.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="main">
    <div class="scroll-container" style="height: <?php echo $sceneHeight ?>px">

        <div class="title depth3" data-250="transform:translate3d(0, 1px, 0);" data-450="transform:translate3d(0, -550px, 0);" >
            <h1>Falling Whale</h1>
        </div>

        <div class="clouds-container">
            <?php for($i=0;$i<=6;$i++): ?>
                <div class="layer depth<?php echo $i ?>" data-start="transform:translate3d(1px, 100px, 0);" data-<?php echo $sceneHeight/4 ?>-end="transform:translate3d(-400px, -<?php echo ($i+1)*$parallaxDegree ?>px, 0);" data-end="transform:translate3d(-500px, -<?php echo ($i+1)*5000 ?>px, 0);" >
                <?php for($j=0;$j<$cloudNb;$j++): ?>
                    <?php $cloudUrl = "./images/clouds/cloud". rand(1, 14) .".png" ?>
                    <div class="cloud" style="top: <?php echo rand(1000, $sceneHeight/4) ?>px; left: <?php echo rand(0, 2500) ?>px; transform:scale(<?php echo ($i+1)/1.5 ?>)">
                        <img src="<?php echo $cloudUrl ?>" />
                    </div>
                <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>

        <div class="ground-container">
            <div class="layer ground depth0" data-start="position: inherit;" data-8000-end="position: fixed; transform:translate3d(-50px, 900px, 0);" data-4000-end="position: fixed;  transform:translate3d(-50px, -300px, 0);">
                <img src="./images/ground/ground4.png" />
            </div>
            <div class="layer ground depth2" data-start="position: inherit;" data-8000-end="position: fixed; transform:translate3d(-50px, 800px, 0);" data-4000-end="position: fixed;  transform:translate3d(-50px,0, 0);">
                <img src="./images/ground/ground3.png" />
            </div>
            <div class="layer ground depth4" data-start="position: inherit;" data-8000-end="position: fixed; transform:translate3d(-50px, 600px, 0);" data-4000-end="position: fixed;  transform:translate3d(-50px,0, 0);">
                <img src="./images/ground/ground2.png" />
            </div>
            <div class="layer ground depth6" data-start="position: inherit;" data-8000-end="position: fixed; transform:translate3d(-50px, 700px, 0);" data-4000-end="position: fixed;  transform:translate3d(-50px, 0px, 0);">
                <img src="./images/ground/ground1.png" />
            </div>
        </div>

        <div class="objects-container">
            <div class="layer flower depth3">
                <img src="./images/objects/flower.png"/>
            </div>
            <div class="layer whale depth4">
                <img src="./images/objects/whale.png" data-8000-end="transform:translate3d(0, 1px, 0) scale(1);" data-4000-end="transform:translate3d(-50px, 30px, 0) scale(0.8); " data-end="transform:translate3d(0, 1000px, 0) scale(0.6);"/>
            </div>
        </div>

        <div class="footer credits depth6">

        </div>

    </div>
</div>

<script src="js/lib/skrollr.min.js"></script>
<script type="text/javascript">
    skrollr.init({
        constants: {
            //fill the box for a "duration" of 150% of the viewport (pause for 150%)
            //adjust for shorter/longer pause
            box: '150p'
        },
        render: function (data) {
            console.log(data.curTop);
        }
    });
</script>
</body>
</html>