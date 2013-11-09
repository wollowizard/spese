<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Spesa - Mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="style.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#nopicturetextspan").hide();

                $("#nopicturespan").click(function() {
                    $("#imgUploadInput").hide();
                    $("#nopicturespan").hide();
                    $("#nopicturetextspan").show();
                    return false;

                });


            });</script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#newsubmit").click(function() {
                    if (($('#imgUploadInput').val() === "") && ($('#nopicturetextarea').val() === "")) {
                        alert("Add a picture of the receipt or say why you don't have the picture available!");
                    }
                    else {
                        $("#formnew").submit();
                    }
                });
            });
        </script>
        <script type="text/javascript"
        src="script/script.js"></script>
    </head>

    <body class="single">
        <div class="wrap">
            <header>
                <div class="logo">

                    <p>Guys guys wait!!!</p>
                </div>   
            </header>
            <div class="content">
                <nav class="vertical menu">
                    <ul>
                        <li><a href="index.php">Transactions</a></li><br>
                        <li><a href="stats.php">Statistics</a></li><br>
                        <li><a href="admin.php">Administration</a></li><br>
                        <li><a href="mobile.php">Mobile</a></li><br>
                    </ul>
                </nav>
                <article>
                    <h2 class="underline">New transaction</h2>
                    <form action="index.php" id="formnew" method="POST" enctype="multipart/form-data">

                        <div>
                            <h4>Amount</h4>
                            <label for="name">sek:</label>
                            <input type="number" step="any" name="newprice" min=0 value=1 required />
                        </div>
                        <br>
                        <div>
                            <h4>Store</h4>
                            <label for="select-choice" class="inline">Select store:</label>
                            <select name="newstore">                        
                                {html_options values=$stores_values output=$stores_output} 
                            </select>
                        </div>
                        <br>
                        <div>
                            <h4>Payer</h4>
                            <label for="select-choice" class="inline">Select guy:</label>
                            <select name="newpayer">                        
                                {html_options values=$payers_values output=$payers_output} 
                            </select>
                        </div>
                        <br>
                        <div>
                            <h4>Picture</h4>
                            <input type='file' id="imgUploadInput" name="imgUploadInput" /><br/>
                            <br>
                            <span style="font-size: small" id="nopicturespan"> <a href="#">I dont have a picture of the receipt</a></span>
                            <span id="nopicturetextspan">Why don't you have a picture?<br><textarea name="nopicturetextarea" id="nopicturetextarea"></textarea></span>
                        </div>



                        <br>
                        <div>

                            <input type="button" id="newsubmit" value="Submit" name=newsubmit>
                        </div>
                    </form>
                    </section>
                </article>
            </div>


        </div>
    </body>
</html>
