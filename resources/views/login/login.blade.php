<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1 style=" font-family: cursive; font-size: xx-large; padding-top: 10px;">Welcome To <span style="color: rgb(18, 33, 239);">IMS</span></h1>
    <div style="display:flex;">
        <div>
            <!-- <img src="/public/images/inventory_management_system.jpeg" height="600vh" width="650px"> -->
        </div>
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-bs-autohide="true" data-bs-delay="5000">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" data-bs-autohide="true" data-bs-delay="5000">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <script>
                // select all elements with data-bs-autohide attribute
                var autoDismissElements = document.querySelectorAll('[data-bs-autohide]');

                // loop through each element
                autoDismissElements.forEach(function(element) {
                    // get the dismiss time in milliseconds from the data attribute
                    var dismissTime = parseInt(element.getAttribute('data-bs-delay'));
                    // set a timeout to dismiss the alert after the specified time
                    setTimeout(function() {
                        element.classList.add('fade');
                        setTimeout(function() {
                            element.remove();
                        }, 500); // wait 0.5s for the fade out animation to complete before removing the element
                    }, dismissTime);
                });
            </script>
            <form method="post" action="/login">
                @csrf
                <h1>Login Form</h1>
                <label for="username">Username</label>
                <input type="text" class="form-control my-2" id="username" name="email" placeholder="Enter username" required>

                <label for="password">Password</label>
                <input type="password" class="form-control my-2" id="password" name="password" placeholder="Enter password" required>

                <input type="submit" class="btn btn-success mt-3 form-control">
            </form>

            <!-- <button style="height: 5vh; width: 500px; background-color: #4CAF50; border-radius: 5px; border: 0px; text-decoration: none;"><a href="/register/register.html"><span style="color: white; text-decoration: none;">Register</span></a></button> -->

        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
    }

    .container {
        margin: 40px auto;
        /* background-color: #fff; */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px white;
        max-width: 600px;
    }

    h1 {
        text-align: center;

    }

    

    label {
        margin-bottom: 5px;
    }

  
</style>

</html>