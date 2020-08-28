<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Slider</title>
    <link rel="stylesheet" href="main.css">


</head>
  <script src="slide.js"></script>
<body>
    <h1>mon slider</h1>
    <div id="slider">
      <img name="slide" width="400" height="200" id="slide">
			<div id="suivant" onclick="ChangeSlide(1)">
<img src="button.png" class="img1">
			</div>
			<div id="precedent" onclick="ChangeSlide(-1)">
<img src="right-arrow.png" class="img1">
			</div>

    </div>
</body>

</html>
