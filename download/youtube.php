<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="icon/x-icon" href="13.png">
    <title>Document</title>
</head>
<body>
    <script src="script.js"></script>
    <div class="p-4 d-flex align-items-center justify-content-center row">
        <label for="back"><a href="../index.php" class="text-white" ><i><-BACK</i></a></label>
        <div class="text-white fa d-flex align-items-center justify-content-center mt-5" >
            <h1>YOUTUBE DOWNLOADER</h1>
        </div>
        <div class="d-flex align-items-center justify-content-center row" >
            <div class="d-flex align-items-center justify-content-center row">
                <input class="col-12 col-sm-6 mb-2 rounded" required type="text" name="link" id="link" placeholder="Paste link here!!!">
                <button class="hov btn btn-warning fa ms-3 mb-2 col-3 col-sm-1" id="paste" >PASTE</button>
            </div><br><br>
            <button class="hov btn btn-warning col-4 col-sm-1 me-3 fa"><img src="music.svg" alt="mp3"><br>CONVERT</button>
            <button class="hov btn btn-warning col-4 col-sm-1 ms-3 fa"><img src="video.svg" alt="video"><br>CONVERT</button>
        </div> 
    </div>
    
</body>
</html>