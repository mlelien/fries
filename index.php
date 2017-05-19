<!--
CITE 
History: http://wonderopolis.org/wonder/belgian-fries/                                                  history

CSS: http://geekgirllife.com/place-text-over-images-on-hover-without-javascript/                        hover image

IMG: 
http://az616578.vo.msecnd.net/files/2016/07/14/636041182926572683496739512_frieee.jpg                   regular
https://lwprodnastorage.blob.core.windows.net/assets/en-us/images/products/items/C27.jpg                wedges
http://dinnerthendessert.com/wp-content/uploads/2016/06/Shoestring-French-Fries-3-680x453.jpg           shoestring
https://lwprodnastorage.blob.core.windows.net/assets/en-us/images/products/items/S0022.jpg              crinkle cut
https://s-media-cache-ak0.pinimg.com/236x/8b/75/9a/8b759aae020362594ab1d5a3b874ee1a.jpg                 truffle
http://cdn.funcheap.com/wp-content/uploads/2013/04/arbys_curly_fries_11.jpg                             curly
http://cdn.schwans.com/media/images/products/60288-1-1540.jpg                                           waffle
http://www.gimmesomeoven.com/wp-content/uploads/2011/03/sweet-potato-fries.jpg                          sweet potato
http://www.seriouseats.com/2015/03/how-to-make-the-best-ultimate-poutine-french-fries-cheese-gravy.html poutine
-->

<html lang="en">
    <head>
        <title>Fries</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-3.1.1.min.js"></script>
        <?php
            $style_path = 'style.css';
            $version = filemtime($style_path);
            echo "<link rel='stylesheet' href='$style_path?ver=$version'>";
        ?>
    </head>
    <body>
        <header>
            <div id="home">
                <div id="header-img"></div> 
                <h1>FRENCH FRIES</h1>
            </div>
        
            <nav>
                <ul>
                    <li><a href="#places">PLACES</a></li>
                    <li><a href="#likes">LIKES</a></li>
                    <li><a href="#history">HISTORY</a></li>
                    <li><a href="#home">HOME</a></li>
                </ul>
                
                <script>
                    
                </script>
            </nav>
        </header>
        
        <div id="history">
            <section>
                <h2 class="place-output">A brief history</h2>
                <p>Despite its name, the French fry is not French. The origins of the French fry have been traced back to Belgium, where historians claim potatoes were being fried in the late-1600s.

    According to local Belgian lore, poor villagers living in Meuse Valley often ate small fried fish they caught in the river. During the winter months the river would freeze over — making fishing impossible and forcing the villagers to find other sources of food.

    Enter the potato. The villagers turned to the root plant, slicing and frying it much in the same way they prepared the fish. And just like that, the earliest French fries were born.

    American soldiers stationed in Belgium were first introduced to French fries during World War I. As the official language of the Belgian army was French, soldiers nicknamed the delicious fried potatoes “French fries." The name stuck, and decades later we're still giving credit to the wrong country.

    French fries are one of the most popular side dishes in the world. When it comes to dipping, fries often find themselves covered in ketchup, mayonnaise, or vinegar, but that seems to be where the universal preference ends.

    In Belgium, people prefer to eat French fries with cooked mussels or with a fried egg on top. The United Kingdom is famous for its “fish and chips." In the Middle East, fries are wrapped in pita bread with chicken, and in France they are served with grilled steak. Canadians serve up poutine, a dish consisting of french fries and cheese curds, topped with brown gravy!</p>
            </section>
        </div>
        
        <div id="likes">
            <section class="darker">
                <ul class="gallery">
                    <li>
                        <img src="img/regular.jpg" alt="regular">
                        <span class="gallery-label"><span>Regular</span></span>
                    </li>
                    <li>
                        <img src=img/wedges.jpg alt="wedges">
                        <span class="gallery-label"><span>Wedges</span></span>
                    </li>
                    <li>
                        <img src="img/shoestring.jpg" alt="shoestring">
                        <span class="gallery-label"><span>Shoestring</span></span>
                    </li>
                    <li>
                        <img src="img/crinkle_cut.jpg" alt="crinkle cut">
                        <span class="gallery-label"><span>Crinkle cut</span></span>
                    </li>
                    <li>
                        <img src="img/curly.jpg" alt="curly">
                        <span class="gallery-label"><span>Curly</span></span>
                    </li>
                    <li>
                        <img src="img/waffle.jpg" alt="waffle">
                        <span class="gallery-label"><span>Waffle</span></span>
                    </li>
                    <li>
                        <img src="img/sweet-potato-fries.jpg" alt="sweet potato">
                        <span class="gallery-label"><span>Sweet potato</span></span>
                    </li>
                    <li>
                        <img src="img/poutine.jpeg" alt="poutine">
                        <span class="gallery-label"><span>Poutine</span></span>
                    </li>
                    <li>
                        <img src="img/truffle.jpg" alt="truffle">
                        <span class="gallery-label"><span>Truffle</span></span>
                    </li>
                </ul>
                
                <form method="post">
                    <h2>Which fries do you like?</h2>
                        <div class="center">
                            <input type="checkbox" name="favFries[]" value="regular"/> Regular
                            <input type="checkbox" name="favFries[]" value="wedges"> Wedges
                            <input type="checkbox" name="favFries[]" value="shoestring"> Shoestring
                            <br><br>
                            <input type="checkbox" name="favFries[]" value="crinkle_cut"> Crinkle Cut
                            <input type="checkbox" name="favFries[]" value="curly"> Curly
                            <input type="checkbox" name="favFries[]" value="waffle"> Waffle
                            <br><br>
                            <input type="checkbox" name="favFries[]" value="sweeet_potato"> Sweet Potato
                            <input type="checkbox" name="favFries[]" value="poutine"> Poutine
                            <input type="checkbox" name="favFries[]" value="truffle">  Truffle
                            <br><br>
                            <input type="submit" name="checkSubmit" value="Stats">
                        </div>
                </form>
                
                <?php
                    if (isset($_POST['checkSubmit'])) {
                        $count = 0;
                        if (!empty($_POST['favFries'])) {
                            $favFries = $_POST['favFries'];
                            
                            foreach($favFries as $fry) {
                                $count++;
                            }
                        }
                        printFryStatus($count);
                    }
                    
                    function printFryStatus($points) {
                        echo "<h3 class='form-result'>";
                        switch($points) {
                            case 0: echo "Sad potato"; break;
                            case 1: echo "Picky eater"; break;
                            case 2: echo "Occasional fry eater"; break;
                            case 3: echo "Frequent fry eater"; break;
                            case 4: echo "A true fan"; break;
                            case 5: echo "Fry lover"; break;
                            case 6: echo "Fry enthusiast"; break;
                            case 7: echo "Fry debonair"; break;
                            case 8: echo "Fry connossieur"; break;
                            case 9: echo "Wow! You even like poutine; what a quirky person you are"; break; 
                            default: echo "Error in the fry system";
                        }
                        echo "</h3>";
                    }
                ?>
                
              </section>
        </div>
        
        <div id="places">
            <section>
                <h2>Type in a name of a place that serves fries</h2>
                <h3>and I'll tell you if I ate there before lol</h3>
                <br>
                <form method="post">
                    <div class="center">
                        <input type="text" name="fryPlace">
                        <input type="submit" name="placeSubmit" value="Yum">
                    </div>
                </form>
                
                <br><br>
                
                <?php
                    $myPlaces = array('Popeyes', 'Five Guys', 'Elevation Burger', 'Shake Shack', 'Costco', 'McDonald\'s', 'McDonalds', 'Burger King', 'Wendy\'s', "Wendys", 'In-n-out', 'Earl\'s', "Earls", 'Gateway BBQ', 'Kings Dominion', 'FCPS', 'Sonic', 'Arby\'s', "Arbys", "Louie's", "Louies", "Chick-fil-A", 'Dairy Queen', 'KFC', "Nando's", "Nandos", "BGR", "Bethe", "Cook", "Keeton", "Rose", "Becker", "Appel", "RPCC", "Nasties");
                    if (isset($_POST['placeSubmit'])) {
                        $fryPlace = rtrim(ltrim($_POST['fryPlace']));
                        $status = 0;
                        
                        if (empty($fryPlace) || preg_match("#[^a-zA-Z \-',0-9]+#", $fryPlace)) {
                            $status = -1;
                        } else if (isset($fryPlace)) {
                            foreach($myPlaces as $myPlace) {
                                if (strcasecmp($myPlace, $fryPlace) == 0) {
                                    $status = 1;
                                }
                            }
                        }
                        
                        printResult($status);
                    }
                
                    function printResult($status) {
                        echo "<h3 class='form-result'>";
                        if ($status === 1) {
                            echo("I have also eaten there! :)");
                        } else if ($status === 0) {
                            echo("I haven't been there :(");
                        } else {
                            echo("I don't think this is a real fry place");
                        }
                        echo "</h3><br>";
                    }
                ?>
                     
            </section>
        </div>
    </body>
</html>