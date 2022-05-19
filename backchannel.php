<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="blog.css" rel="stylesheet">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">WIRED</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="index.php">HOME</a>
                <a class="p-2 link-secondary" href="#">BUSINESS</a>
                <a class="p-2 link-secondary" href="#">CULTURE</a>
                <a class="p-2 link-secondary" href="#">GEAR</a>
                <a class="p-2 link-secondary" href="#">MORE</a>
            </nav>
        </div>
    </div>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <?php
                include('config.php');
                $sql = "select * from posts where id=10;";
                $result = mysqli_query($conn, $sql);
                $res = mysqli_fetch_array($result);
                echo "<h1 class=\"display-4 fst-italic\">" . $res['Title'] . "</h1>";
                echo "<p class=\"lead my-3\">" . $res['Content'] . "</p>";
                echo "<p class=\"lead mb-0\"><a href=\"#\" class=\"text-white fw-bold\">" . $res['Author'] . "</a></p>";
                ?>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <?php
                        include('config.php');
                        $sql = "select * from posts where id=8;";
                        $result = mysqli_query($conn, $sql);
                        $res = mysqli_fetch_array($result);
                        echo "<strong class=\"d-inline-block mb-2 text-primary\">" . $res['Category'] . "</strong>";
                        echo "<h3 class=\"mb-0\">" . $res['Title'] . "</h3>";
                        echo "<div class=\"mb-1 text-muted\">" . $res['Date'] . "</div>";
                        echo "<p class=\"card-text mb-auto\">" . $res['Content'] . "</p>";
                        echo "<a href=\"#\" class=\"stretched-link\">" . $res['Author'] . "</a>";
                        ?>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <?php
                            include('config.php');
                            $sql = "select Url from posts where id=8;";
                            $result = mysqli_query($conn, $sql);
                            $res = mysqli_fetch_array($result);
                            echo "<image href="."\"".$res['Url']."\""."/>";
                            ?>  
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <?php
                        include('config.php');
                        $sql = "select * from posts where id=7;";
                        $result = mysqli_query($conn, $sql);
                        $res = mysqli_fetch_array($result);
                        echo "<strong class=\"d-inline-block mb-2 text-primary\">" . $res['Category'] . "</strong>";
                        echo "<h3 class=\"mb-0\">" . $res['Title'] . "</h3>";
                        echo "<div class=\"mb-1 text-muted\">" . $res['Date'] . "</div>";
                        echo "<p class=\"card-text mb-auto\">" . $res['Content'] . "</p>";
                        echo "<a href=\"#\" class=\"stretched-link\">" . $res['Author'] . "</a>";
                        ?>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <?php
                            include('config.php');
                            $sql = "select Url from posts where id=7;";
                            $result = mysqli_query($conn, $sql);
                            $res = mysqli_fetch_array($result);
                            echo "<image href="."\"".$res['Url']."\""."/>";
                            ?>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <?php
                        include('config.php');
                        $sql = "select * from posts where id=9;";
                        $result = mysqli_query($conn, $sql);
                        $res = mysqli_fetch_array($result);
                        echo "<strong class=\"d-inline-block mb-2 text-primary\">" . $res['Category'] . "</strong>";
                        echo "<h3 class=\"mb-0\">" . $res['Title'] . "</h3>";
                        echo "<div class=\"mb-1 text-muted\">" . $res['Date'] . "</div>";
                        echo "<p class=\"card-text mb-auto\">" . $res['Content'] . "</p>";
                        echo "<a href=\"#\" class=\"stretched-link\">" . $res['Author'] . "</a>";
                        ?>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <?php
                            include('config.php');
                            $sql = "select Url from posts where id=2;";
                            $result = mysqli_query($conn, $sql);
                            $res = mysqli_fetch_array($result);
                            echo "<image href="."\"".$res['Url']."\""."/>";
                            ?>  
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <?php
                        include('config.php');
                        $sql = "select * from posts where id=3;";
                        $result = mysqli_query($conn, $sql);
                        $res = mysqli_fetch_array($result);
                        echo "<strong class=\"d-inline-block mb-2 text-primary\">" . $res['Category'] . "</strong>";
                        echo "<h3 class=\"mb-0\">" . $res['Title'] . "</h3>";
                        echo "<div class=\"mb-1 text-muted\">" . $res['Date'] . "</div>";
                        echo "<p class=\"card-text mb-auto\">" . $res['Content'] . "</p>";
                        echo "<a href=\"#\" class=\"stretched-link\">" . $res['Author'] . "</a>";
                        ?>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <?php
                            include('config.php');
                            $sql = "select Url from posts where id=3;";
                            $result = mysqli_query($conn, $sql);
                            $res = mysqli_fetch_array($result);
                            echo "<image href="."\"".$res['Url']."\""."/>";
                            ?>
                        </svg>

                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class="blog-footer">
        <p>WIRED</p>
        <p>WIRED is where tomorrow is realized. It is the essential source of information and ideas that make sense of a
            world in constant transformation. The WIRED conversation illuminates how technology is changing every aspect
            of our lives—from culture to business, science to design. The breakthroughs and innovations that we uncover
            lead to new ways of thinking, new connections, and new industries.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
</body>

</html>