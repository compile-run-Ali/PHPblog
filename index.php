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
                <a class="p-2 link-secondary" href="backchannel.php">BACKCHANNEL</a>
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
                $sql = "select * from posts where id=1;";
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
                        $sql = "select * from posts where id=2;";
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

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    From the Firehose
                </h3>

                <article class="blog-post">
                    <?php
                    include('config.php');
                    $sql = "select * from posts where id=5;";
                    $result = mysqli_query($conn, $sql);
                    $res = mysqli_fetch_array($result);
                    echo "<h2 class=\"blog-post-title\">".$res['Category']."</h2>";
                    echo "<p class=\"blog-post-meta\">".$res['Date']. " by ". "<a href=\"#\">".$res['Author']."</a></p>";
                    echo "<p>".$res['Title']."</p>";
                    echo "<p>".$res['Content']."</p>";
                    ?>
                    <hr>
                    <?php
                    include('config.php');
                    $sql = "select * from posts where id=6;";
                    $result = mysqli_query($conn, $sql);
                    $res = mysqli_fetch_array($result);
                    echo "<h2 class=\"blog-post-title\">".$res['Category']."</h2>";
                    echo "<p class=\"blog-post-meta\">".$res['Date']. " by ". "<a href=\"#\">".$res['Author']."</a></p>";
                    echo "<p>".$res['Title']."</p>";
                    echo "<p>".$res['Content']."</p>";
                    ?>
                    <blockquote class="blockquote">
                        <h3>Most Recent</h3>
                        <ul>
                            <li>After-loss Tech Wants to Ease the Logistics of Death</li>
                            <li>The Best Hiking Shirts and Base Layers for Outdoor Fun</li>
                            <li>The Newton-Rider Bike Helmet Folds to Fit in your Bag</li>
                        </ul>
                        <p>Older</p>
                        <ol>
                            <li>Netflix's SpaceX Documentary Doesn't tell the Whole Story</li>
                            <li>The <b>Insta 360</b> One RS Camera is the Best of Both Worlds</li>
                        </ol>
                        <p>Trending Stories</p>
                        <dl>
                            <dt>As Russia Plots Its Next Move, an AI Listens to the Chatter</dt>
                            <dd>With vast amounts of data becoming available to intelligence analysts, new tools will
                                help
                                them sift and interpret it all—but they will introduce new risks, too.</dd>
                            <dt>6 Free Ways to Practice Sign Language Online</dt>
                            <dd>You don’t need to spend any money to start learning American Sign Language (ASL) with
                                these
                                resources.</dd>
                            <dt>I Finally Found a Work Computer Setup That's Practically Perfect</dt>
                            <dd>Hear me out: A primary ultrawide monitor paired with a second screen in portrait
                                orientation
                                levels up your work and play.</dd>
                        </dl>
                        <h2>Power Move</h2>
                        <p>The administration will use the Defense Production Act to encourage mining raw materials for
                            batteries. But a sustainable fix will take years.</p>
                        <h3>Biden Plays a National Security Card to Fix the Lithium Shortage </h3>
                        <p>THE FIRST QUESTION to ask about the lithium shortage is whether there is a shortage at all.
                        </p>
                </article>

                <article class="blog-post">
                    <?php
                    include('config.php');
                    $sql = "select * from articles where id=1;";
                    $result = mysqli_query($conn, $sql);
                    $res = mysqli_fetch_array($result);
                    echo "<h2 class=\"blog-post-title\">".$res['Title']."</h2>";
                    echo "<p class=\"blog-post-meta\">".$res['Date']. " by ". "<a href=\"#\">".$res['Author']."</a></p>";
                    echo "<p>".$res['Content']."</p>";
                    ?>
                    </blockquote>
                    <p>These picks we've assembled below were tested with old-school pedal bikes in mind, but nearly all
                        of them will work for both electric bikes and non-electric (acoustic) bikes. Take a look at our
                        Guide to Classes of Ebike and Best Ebikes for more of our thoughts and explainers on electric
                        bicycles.</p>
                    <h3>Bad Weather Gear</h3>
                    <p> With the proper rainwear and protective equipment, you can keep yourself (mostly) dry and make
                        riding in the wet a bearable, if not pleasurable, experience:</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Accessory</th>
                                <th>Price</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fixed Fenders</td>
                                <td>$129</td>
                                <td>4/5</td>
                            </tr>
                            <tr>
                                <td>Pop-on fenders</td>
                                <td>$21</td>
                                <td>3/5</td>
                            </tr>
                            <tr>
                                <td>Rainwear</td>
                                <td>$90</td>
                                <td>4.5/5</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Seat Cover</td>
                                <td>$13</td>
                                <td>3.5/5</td>
                            </tr>
                        </tfoot>
                    </table>

                    <p>If you ride enough, you're going to get caught in a storm from time to time, but you don't have
                        to ride soaked and miserable. Take a look at our guide to the Best Rain Jackets too.</p>
                </article>
                <?php
                    include('config.php');
                    $sql = "select * from articles where id=2;";
                    $result = mysqli_query($conn, $sql);
                    $res = mysqli_fetch_array($result);
                    echo "<h2 class=\"blog-post-title\">".$res['Title']."</h2>";
                    echo "<p class=\"blog-post-meta\">".$res['Date']. " by ". "<a href=\"#\">".$res['Author']."</a></p>";
                    echo "<p>".$res['Content']."</p>";
                    ?>
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled">Newer</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">WIRED is the magazine about what's next – bringing you the people, the trends
                            and the big ideas that will change our lives.

                            Each month, through thought-provoking features and stunning photography, we explore the next
                            big ideas in science, culture, business – wherever innovation and new thinking are reshaping
                            our world.

                            Since the US edition of WIRED launched in 1993, the magazine has been synonymous with
                            informed and intelligent analysis, and a consistently reliable predictor of change.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
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