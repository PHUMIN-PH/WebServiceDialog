<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TKT Daily Checker</title>
    <link rel="stylesheet" href="mycss.css">
</head>

<body>
    <nav class="navbar bg-warning d-flex justify-content-between">
        <div class="">
            <code>
            <a href="" class=" navbar-brand fw-bold fs-5">Code</a>
            <a href="" class=" navbar-brand fw-bold fs-5">Database</a>
            </code>
        </div>
        <div class="">
            <a href="#" class="navbar-brand fw-bold fs-1">
                <img src="logo.png" alt="" class="text-drak center webserve">
            </a>
        </div>
        <div class="">
            <a href="#" class="navbar-brand fw-bold fs-5">
                About
            </a>
            <a href="#" class="navbar-brand fw-bold fs-5">
                Help?
            </a>
        </div>
    </nav>
   
    <Code>
    <div class="d-flex justify-content-evenly menuHeader">
        <li class="nav-item active"><a href="#" data-toggle="tab" aria-controls="#" aria-selected="true" role="tab"><i class="fa fa-globe fa-2xl" herf="#" aria-hidden="true">ALL</i></a></li>
        <li class="nav-item"><a href="#" data-toggle="tab" aria-controls="#2" aria-selected="false" role="tab"><i class="fa fa-server fa-2xl" aria-hidden="true">Server</i></a></li>
        <li class="nav-item"><a href="#" data-toggle="tab" aria-controls="#3" aria-selected="false" role="tab"><i class="fa fa-th fa-2xl" aria-hidden="true">ISP</i></a></li>
        <li class="nav-item"><a href="#" data-toggle="tab" aria-controls="#4" aria-selected="false" role="tab"><i class="fa fa-video-camera fa-2xl" aria-hidden="true">CCTV</i></a></li>
        
    </div>

    <div class="d-flex d-flex justify-content-center">
        <div class="loading-bar "></div>
    </div>
    
    <div class="container">
        <div class="tab-pane fade active show in card m-5 p-2">
            <table class="table table-bordered text-dark">
                <thead class="fw-bold">
                    <td>No.</td>
                    <td>IP Address</td>
                    <td>Name</td>
                    <td>Status</td>
                    <td>Time</td>
                </thead>
                <tbody class="response">

                    <!-- <tr>
                    <td>01</td>
                    <td>192.168.0.20</td>
                    <td>Log Firewall</td>
                    <td>Online</td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>192.168.0.20</td>
                    <td>Log Firewall</td>
                    <td>Online</td>
                    <td>
                        
                    </td>
                </tr> -->

                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>
        <div class="d-flex justify-content-end m-5">
            <button type="button" class="btn btn-primary btnDatabase">Save Data</button>
        </div>
    </div>
    </Code>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        // Handle button click
        $(document).ready(function () {
            console.log("Hry");
            // Inmediatly show your bar
            var $loadingBar = $('.loading-bar');
            var $loadingHeader = $('.menuHeader');
            var $btnSaveData = $('.btnDatabase');
            $loadingBar.addClass('active');

            // Then execute Ajax
            $.ajax({
                url: "renderBody.php",
                method: 'GET'
            })
                .done(function (data) {
                    // Display response data
                    $('tbody.response').html(data);
                })
                .fail(function (error) {
                    // Display error if fails
                    $('tbody.response').html(error);
                    console.log("Hry");
                })
                .always(function () {
                    // Always hide loading bar when finish
                    $loadingBar.removeClass('active');
                    $loadingHeader.addClass('active');
                    $btnSaveData.addClass('active');
                });
        });

        
    </script>
</body>

</html>