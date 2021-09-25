<?php
require("FizzBuzz.php");

$min = intval($_GET['min']);
$max = intval($_GET['max']);
$outcome = '';

if (is_int($min) && is_int($max)) {
    $fb = new FizzBuzz();
    $outcome = $fb->series($min, $max);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>AdAction Code Challenge</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    html, body {
      padding: 0;
      margin: 0;
      color: #555;
      height: 100%;
      background-color: #eeeeee;
      box-shadow: inset 0 0 50px #fff;
    }

    .page-wrap {
      display: flex;
      justify-content: space-evenly;
      flex-direction: column;
      height: 100%;
    }

    .container {
      flex-basis: auto;
      width: 80%;
      max-width: 800px;
      margin: 0 auto 0 auto;
      padding: 20px 20px 15px 20px;
      background-color: white;
      box-shadow: 5px 5px 10px #ccc;
      border: 1px solid #bbb;
      border-radius: 5px;
    }

    form > section {
      margin-bottom: 0.5em;
    }

    h1 {
      text-align: center;
      margin-top: 0;
      text-shadow: 2px 2px 0 #d1d1d1;
    }

    form > section > label, form > section > div {
      display: inline-block;
      box-sizing: border-box;
      width: 30%;
      padding-right: 10px;
      min-width: 8em;
      text-align: right;
    }

    #outcome {
      padding-top: 1em;
    }
    #outcome-area > label {
      width: auto;
      text-align: left;
    }
    #outcome-area > textarea {
      width: 100%;
      margin-top: 0.25em;
      box-sizing: border-box;
      padding: 5px 10px;
      background-color: #eee;
    }
  </style>
</head>

<body>

<div class="page-wrap">
  <div class="container">
    <h1>AdAction Code Challenge</h1>
    <form id="fizzbuzz" name="fizzbuzz" method="get">

      <section>
        <label for="min">Range Minimum</label>
        <input id="min" name="min" type="number" step="1" value="<?php echo $min ?>"/>
      </section>

      <section>
        <label for="max">Range Maximum</label>
        <input id="max" name="max" type="number" step="1" value="<?php echo $max ?>"/>
        <input type="submit" value="Submit">
      </section>

      <section id="outcome-area">
      <label for="outcome">Final String:</label>
      <textarea id="outcome" name="outcome" readonly="readonly" rows="9"><?php
            echo "$outcome\n";
            $stats = $fb->stats;
            echo "fizz: $stats[fizz]\n";
            echo "buzz: $stats[buzz]\n";
            echo "fizzbuzz: $stats[fizzbuzz]\n";
            echo "lucky: $stats[lucky]\n";
            echo "integer: $stats[integer]\n";
          ?>
      </textarea>
      </section>

    </form>
  </div>
</div>

</body>
</html>
