<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
  <meta charset="utf-8" />
  <title>Speedtest</title>
  <link rel="stylesheet" href="style.css">
  <script src="speedtest.js"></script>
</head>

<body>
  <header>
    <?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
  </header>

  <main>
    <button id="startStopBtn" onclick="startStop()"></button>
    <div id="test">
      <p>Progress</p>
      <div id="progressBar">
        <div id="progress"></div>
      </div>
      <div class="testGroupParent">
        <div class="testGroup">
          <div class="testArea">
            <div class="testName">Download</div>
            <div id="dlText" class="meterText"></div>
            <div class="unit">Mbit/s</div>
          </div>
          <div class="testArea">
            <div class="testName">Upload</div>
            <div id="ulText" class="meterText"></div>
            <div class="unit">Mbit/s</div>
          </div>
        </div>
        <div class="testGroup">
          <div class="testArea">
            <div class="testName">Ping</div>
            <div id="pingText" class="meterText"></div>
            <div class="unit">ms</div>
          </div>
          <div class="testArea">
            <div class="testName">Jitter</div>
            <div id="jitText" class="meterText"></div>
            <div class="unit">ms</div>
          </div>
      </div>
      </div>
      <div id="ipArea">
        IP Address: <span id="ip"></span>
      </div>
      <p id="source">This is a fork from <a href="https://github.com/librespeed/speedtest">https://github.com/librespeed/speedtest</a>.</p>
    </div>
  </main>

  <script>
    initUI();
  </script>
</body>

</html>
