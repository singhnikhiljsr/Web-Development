<html>
    <head>
        <title>Product Categories</title>
        <style>
            .button {
                border: none;
                width: 24em;
                border-style: ridge;
                color:black;
                padding: 32px 64px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                background-color: rgb(35, 212, 44);
                border: 2px solid #008CBA
            }

            .button:hover {
                background-color: #4CAF50;
                color: white;
            }
            hr{
                margin-left: auto;
                margin-right: auto;
                height: 10px;
                background-color: rgb(255, 0, 106);
            }
        </style>
    </head>
    <body style="font-family:Arial, Helvetica, sans-serif;background-color:powderblue;">
        <center>
            <hr>
            <h1>PRODUCT CATEGORIES</h1>
            <hr>
            <div style="position: relative;top: 40px;">    
            <a href="essentials.php">
           <button type="button" class="button" ">
                ESSENTIALS
            </button>
            </a>
            <br>
            <a href="clothes.php">
            <button type="button" class="button">
                CLOTHES
            </button>
            </a>
            <br>
            <a href="gadgets.php">
            <button type="button" class="button">
                GADGETS
            </button>
            </a>
            <br>
            <a href="medicines.php">
            <button type="button" class="button">
                MEDICINES
            </button>
            </a>
            <br>
            <a href="b&pc.php">
            <button type="button" class="button">
                BEAUTY & PERSONAL CARE
            </button>
            </a>
            </div>
            </center>
    </body>
</html>