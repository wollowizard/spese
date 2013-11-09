<html>
<head>
    <meta name="viewport" content="width=device-width">
        <TITLE>{$title} - {$Name}</TITLE>
        <!-- jquery/jqueryui -->
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
       

        <script type="text/javascript"
        src="script/script.js"></script>
        
          <link rel="stylesheet"
              href="css.css"
              type="text/css" media="screen" />


        <!-- /jquery/jqueryui -->

  <style>
    #left
    {
      width: 200px;
      float: left;
    }

    #right
    {
      margin-left: 200px; /* Change this to whatever the width of your left column is*/
    }

    .clear
    {
      clear: both;
    }
  </style>
</head>
<body>
  <div id="container">
    <div id="left">
      <ul>
          <li><a href="index.php">Transactions</a></li><br><br><br>
                <li><a href="stats.php">Statistics</a></li><br><br><br>
                <li><a href="admin.php">Administration</a></li><br><br><br>
                <li><a href="mobile.php">Mobile</a></li>
                
            </ul>
    </div>
    <div id="right">
      <div >
      
          <form action="index.php" id="formnew" method="POST" enctype="multipart/form-data">
        <table >
            <thead>
                <tr>
                    <th>Price</th>
                    <th>Store</th>
                    <th>Payer</th>

                </tr>
            </thead>

            <tbody>

                <tr>

                    <td><input type="number" step="any" name="newprice" min=0 value=1 required /></td>
                    <td><select name="newstore">                        
                            {html_options values=$stores_values output=$stores_output} 
                        </select>
                    </td>
                    <td><select name="newpayer">                        
                            {html_options values=$payers_values output=$payers_output} 
                        </select></td>            

                </tr>
                <tr><td></td><td></td><td></td></tr>

            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Picture</th>
                    <th></th>

                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>
                        <input type='file' id="imgUploadInput" name="imgUploadInput" /><br/>
                        <span style="font-size: small" id="nopicturespan"> <a href="#">I dont have a picture of the receipt</a></span>
                        <span id="nopicturetextspan">Why don't you have a picture?<br><textarea name="nopicturetextarea" id="nopicturetextarea"></textarea></span>
                    </td>
                    <td>
                        <input type="button" id="newsubmit" value="Submit" name=newsubmit>
                    </td>


                </tr>
                <tr><td></td><td></td></tr>

            </tbody>
        </table>
    </form
      
      
      </div>
    </div>
    <div class="clear"></div>
  </div>
</body>
</html>