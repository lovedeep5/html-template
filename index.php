<!DOCTYPE html>
<html>

<head>
    <title>Template</title>
    <?php require_once './modules/head.php' ?>
</head>

<body class="home">
    <div class="header-wrapper">
        <?php require_once './modules/header.php' ?>
        <?php require_once './modules/navbar.php' ?>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Heading 1</h1>
                    <hr>
                    <h2>Heading 2</h2>
                    <hr>
                    <h3>Heading 3</h3>
                    <hr>
                    <h4>Heading 4</h4>
                    <hr>
                    <h5>Heading 5</h5>
                    <hr>
                    <h6>Heading 6</h6>
                    <hr>
                    <span> <a href="#" class="btn-link">Learn More</a></span>
                    <hr>
                </div>

                <div class="col-sm-6">
                    <img src="http://via.placeholder.com/800x600" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolor adipisci saepe quaerat
                        exercitationem. Assumenda provident maiores repudiandae ducimus laborum, sint est id et in
                        voluptates excepturi, facilis vel quae molestiae, tenetur sit? At distinctio consectetur, qui
                        quaerat ea delectus minima ab dolore labore odio dolor architecto voluptatum recusandae amet nam
                        quis iure adipisci natus magni possimus nulla veritatis aliquid!
                    </span>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <?php require_once './modules/services.php' ?>
    <?php require_once './modules/testimonials.php' ?>
    <?php require_once './modules/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
    </script>
</body>

</html>