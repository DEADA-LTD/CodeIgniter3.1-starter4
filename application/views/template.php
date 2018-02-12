<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
            .jumbotron {
                padding: 0.5em 0.6em;
                h1 {
                    font-size: 2em;
                }
                p {
                    font-size: 1.2em;
                    .btn {
                        padding: 0.5em;
                    }
                }
            }
            .containerdiv { float: left; position: relative; } 
            .weapon { position: absolute; top: 75px; left: -30px; }
            .helmet { position: absolute; top: -50px; right: 30px; } 
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">David's Equipment</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/Catalog">Catalog</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            {content}
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
                {ci_version}</p>
        </div>
    </body>
</html>
<script>
    // this is the id of the form
    $("#presetForm").submit(function (e) {

        var url = "/Welcome/Update"; // the script that handles the form input

        $.ajax({
            type: "POST",
            url: url,
            data: $("#presetForm").serialize(), // serializes the form's elements.
            success: function (data)
            {
                var jsonData = JSON.parse(data)

                if (jsonData.length === 2) { //Just 2 for now
                    $("#weapon").attr("src","/assets/images/items/" + jsonData[0]);
                $("#helmet").attr("src","/assets/images/items/" + jsonData[1]);
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>
