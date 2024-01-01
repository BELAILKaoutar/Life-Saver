<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 48%; /* Adjust this width to leave space for margins and paddings */
            margin-bottom: 20px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        img {
            width: 60%;
            height: auto;
        }
        .tooltip {
            visibility: hidden;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 0;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

    </style>
</head>
<body>
<div class="card-container">
    <div class="card" >
        <img src="images/glucometer.png" alt="Avatar">
        <div class="container">
            <h4><b>Glucometer</b></h4> 
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Glucometer</button>
            <div id="demo" class="collapse in">  
              Steps to follow for Glucometer:
                <ul>
                    <li>Step 1: ...</li>
                    <li>Step 2: ...</li>
                    <li>Step 3: ...</li>
                    <!-- Add more steps as needed -->
                </ul>
            </div>
        </div>
    </div>


    <div class="card">
        <img src="images/heart.png" alt="Avatar">
        <div class="container">
            <h4><b>Heart</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/intestine.png" alt="Avatar">
        <div class="container">
            <h4><b>Intestine</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/lungs.png" alt="Avatar">
        <div class="container">
            <h4><b>Lungs</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/no-smoking.png" alt="Avatar">
        <div class="container">
            <h4><b>No-smoking</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/plaster.png" alt="Avatar">
        <div class="container">
            <h4><b>Plaster</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/radiography.png" alt="Avatar">
        <div class="container">
            <h4><b>radiography</b></h4> 
        </div>
    </div>

    <div class="card">
        <img src="images/stomach.png" alt="Avatar">
        <div class="container">
            <h4><b>Stomach</b></h4> 
        </div>
    </div>
</div>

</body>
</html>
