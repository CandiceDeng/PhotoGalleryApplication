<?php
// use Symfony\Component\Process\Process;
// use Symfony\Component\Process\Exception\ProcessFailedException;
//
// $process = new Process(['python', '/Users/CandiceDeng\ 1/PhotoGalleryApplication/resources/python/parseCSV.py']);
// $process->run();
//
// // executes after the command finishes
// if (!$process->isSuccessful()) {
//     throw new ProcessFailedException($process);
// }
//
// echo $process->getOutput();

$output = shell_exec('python /Users/CandiceDeng\ 1/PhotoGalleryApplication/resources/python/parseCSV.py');
$output = str_replace("[","",$output);
$urls = explode(',', $output);
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhotoGallery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    </head>

    <body>
      <header class="header" id="header">
        <h2>Welcome to the Photo Gallery</h2>
        <button class="control" id="filter-btn">GrayScale</button>
        <div id="dim-range" class="control">
          <p>Dimension(Width) Range: <span class="slider-min">0</span> - <span class="slider-max">200</span>
          </p>
          <div class="slider">
              <div id="slider-range"></div>
          </div>
        </div>
      </header>

      <div class="gallery">
        <?php foreach ($urls as $url) { ?>
          <img src=<?php echo $url; ?>>
        <?php } ?>
      </div>

      <footer>
        <p>Created by Candice Deng @ 01/20/2020</p>
      </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
