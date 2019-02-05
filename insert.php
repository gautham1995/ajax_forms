<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax Form Submission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function () {
            $('#form_id').on('submit', function (e) {
                //Stop the form from submitting itself to the server.
                e.preventDefault();
                var c_name = $('#cname').val();
                var team = $('#team').val();
                var runs = $('#runs').val();
                var wiki = $('#wiki').val();

                $.ajax({
                    type: "GET",
                    url: 'insert.php',
                    data: { c_name: c_name, team: team, runs: runs, wiki: wiki },
                    success: function (data) {
                        // alert(data);
                        $("#msg").html(data);
                    }
                });
            });
            return false;
        });

    </script>

</head>

<body>

    <div class="container">
        <h3 class="text-center">Ajax Form Submission:</h3>
        <form id="form_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cricketer" id="cname" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Team" id="team" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Runs" id="runs" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" id="wiki" placeholder="Wiki" required></textarea>
            </div>
            <button type="submit" value="sub" class="btn btn-primary" style="float:right;">Submit</button>
        </form>
        <br>
        <hr>
        <div id="msg">
        </div>


    </div>

</body>

</html>