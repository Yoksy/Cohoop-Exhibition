<?php

if (empty($_GET['s']))
    $_GET['s'] = 'registration';

if (empty($_GET['p']))
    $_GET['p'] = '01';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header id="header">
            <div id="top-header">
                <div class="outer-container">
                    <div class="span-column-12 inner-header">
                        <div class="inner-span-column-3">
                            <?php if ($_GET['s'] != 'registration'): ?>

                            <form id="search-form" action="#" method="post">
                                <input type="text" name="search" id="search-input">
                                <input type="submit" value="Search" class='icon search'>
                            </form>
                            <?php else: ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="inner-span-column-6">
                            <h1 id="logo">
                                <a href="#" title="CoHoop - social student network">CoHoop</a>
                            </h1>
                        </div>
                        <div class="inner-span-column-3">
                            <?php if ($_GET['s'] != 'registration'): ?>
                            <a href="#" class="icon params"></a>
                            <?php else: ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($_GET['s'] != 'registration'): ?>
            <div id="bottom-header">
                <div class="outer-container">
                    <div class="span-column-12 inner-header">
                        <div class="inner-span-column-3">
                            <div id="share-header" class="clearfix">
                                <span>Share</span>
                                <ul>
                                    <li>
                                        <a href="#" class="icon facebook">Facebook</a>
                                    </li>
                                    <li><a href="#" class="icon twitter">Twitter</a></li>
                                    <li><a href="#" class="icon googleplus">Google+</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="inner-span-column-6">
                            <nav class="clearfix">
                                <ul>
                                    <li id="feed-icon">
                                        <a href="#" class="icon news"><span class="badge gold">2</span></a>
                                    </li>
                                    <li><a href="#" class="icon hexagone"></a></li>
                                    <li><a href="#" class="icon favorite"></a></li>
                                    <li><a href="#" class="icon folder"></a></li>
                                    <li><a href="#" class="icon file"></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="inner-span-column-3">
                            <a href="#" class="icon logout"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
               
        </header>
        
        <div id="container" class="outer-container">

            <?php if ($_GET['s'] == 'registration'): ?>

                

                <div id="head-register" class="span-column-12">
                    <div class="inner-span-column-2 shift-5 align-center">
                        <div id="register-steps" class="span-column-12">
                            <div class="inner-span-column-4 align-left<?php if ($_GET['p'] == '02') echo ' current'; ?>"><span>1</span></div>
                            <div class="inner-span-column-4 align-center<?php if ($_GET['p'] == '03') echo ' current'; ?>"><span>2</span></div>
                            <div class="inner-span-column-4 align-right<?php if ($_GET['p'] == '04') echo ' current'; ?>"><span>3</span></div>
                        </div>
                    </div>
                    <div class="inner-span-column-4 shift-4 align-center">
                        <h2>
                            <?php if ($_GET['p'] == '01') echo ' Register'; ?>
                            <?php if ($_GET['p'] == '02') echo ' Register'; ?>
                            <?php if ($_GET['p'] == '03') echo ' Interested in'; ?>
                            <?php if ($_GET['p'] == '04') echo ' Create your community'; ?>
                        </h2>
                    </div>
                </div>
                <div id="content-register" class="span-column-12">
                    <div class="inner-span-column-1 shift-1 arrow-container">
                        <a href="#" class="arrow big left" id="registration-previous"></a>
                    </div>
                    <div class="inner-span-column-8">
                        <?php if ($_GET['p'] == '01'): ?>
                        <div id="registration-part-1" class="span-column-12">
                            <div id="social-login" class="inner-span-column-6 align-center">
                                <div>
                                    <span class="small-text">Log with</span>
                                    <ul id="external-login">
                                        <li><a href="#" class="icon-big facebook">Facebook</a></li>
                                        <li><a href="#" class="icon-big twitter">Twitter</a></li>
                                        <li><a href="#" class="icon-big google">Google</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="regular-login" class="inner-span-column-6">
                                <form id="login-form" action="#" method="post">
                                    <div class="advanced-form outline">
                                        <label for="email">E-mail</label>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="advanced-form outline">
                                        <label for="password">Password</label>
                                        <input type="text" name="password" id="password">
                                    </div>
                                    <input type="submit" value="Log in" class="blue-button">
                                    <button id="new-account" class="w100">Not a member yet ?</button>
                                </form>
                            </div>
                        </div> <!-- /Registration part 1 -->

                        <?php elseif ($_GET['p'] == '02'): ?>
                        <div id="registration-part-2" class="span-column-12">
                           <div class="inner-span-column-12">
                               <div id="social-login" class="inner-span-column-6 align-center">
                                    <div>
                                        <span class="small-text">Log with</span>
                                        <ul id="external-login">
                                            <li><a href="#" class="icon-big facebook">Facebook</a></li>
                                            <li><a href="#" class="icon-big twitter">Twitter</a></li>
                                            <li><a href="#" class="icon-big google">Google</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="regular-login" class="inner-span-column-6">
                                    <form id="registration-form" action="#" method="post">
                                        <div class="advanced-form outline half-input">
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" id="firstname">
                                        </div>
                                        <div class="advanced-form outline half-input">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" name="lastname" id="lastname">
                                        </div>
                                        <div class="advanced-form outline">
                                            <label for="university">University</label>
                                            <input type="text" name="university" id="university">
                                        </div>
                                        <div class="advanced-form outline">
                                            <label for="email">E-mail</label>
                                            <input type="text" name="email" id="email">
                                        </div>
                                        <div class="advanced-form outline">
                                            <label for="password">Password</label>
                                            <input type="text" name="password" id="password">
                                        </div>
                                        <div class="advanced-form outline">
                                            <label for="repassword">Confirm Password</label>
                                            <input type="text" name="repassword" id="repassword">
                                        </div>
                                        <input type="submit" value="Log in" class="blue-button">
                                    </form>
                                </div>
                           </div>
                        </div> <!-- /Registration part 2 -->

                        <?php elseif ($_GET['p'] == '03'): ?>
                        <div id="registration-part-3" class="span-column-12">
                            <ul id="interest-selection">
                                <li><a href="#" class="icon-tags big environment check">Environment</a></li>
                                <li><a href="#" class="icon-tags big computer">History</a></li>
                                <li><a href="#" class="icon-tags big litterature">Litterature</a></li>
                                <li><a href="#" class="icon-tags big music check">Music</a></li>
                                <li><a href="#" class="icon-tags big sciences">Sciences</a></li>
                                <li><a href="#" class="icon-tags big computer">Computer</a></li>
                                <li><a href="#" class="icon-tags big music">Music</a></li>
                                <li><a href="#" class="icon-tags big sciences">Sciences</a></li>
                                <li><a href="#" class="icon-tags big environment">Environment</a></li>
                                <li><a href="#" class="icon-tags big history">History</a></li>
                                <li><a href="#" class="icon-tags big computer">Computer</a></li>
                                <li><a href="#" class="icon-tags big litterature">Litterature</a></li>   
                                <li><a href="#" class="icon-tags big environment">Environment</a></li>
                                <li><a href="#" class="icon-tags big computer">Computer</a></li>
                                <li><a href="#" class="icon-tags big litterature">Litterature</a></li>
                                <li><a href="#" class="icon-tags big music">Music</a></li>
                                <li><a href="#" class="icon-tags big sciences">Sciences</a></li>
                                <li><a href="#" class="icon-tags big history">History</a></li>
                            </ul>
                            <div class="span-column-12 bottom-button">
                                <a href="#" id="skip-registration-part" class="blue-button">Skip</a>
                                <a href="#" id="next-registration-part" class="blue-button">Done</a>
                            </div>
                        </div> <!-- /Registration part 3 -->

                         <?php elseif ($_GET['p'] == '04'): ?>
                        <div id="registration-part-4" class="span-column-12">
                            <ul id="community-selection">
                                <li>
                                    <a href="#" title="#" class="icon check">
                                        <div class="overlay-placeholder">
                                            <div class="overlay"></div>
                                            <img src="medias/avatars/01.jpg" alt="">
                                        </div>
                                        <span>Célia Marin</span>
                                        <span>London School</span>
                                    </a>
                                </li>
                                <li><a href="#" title="#" class="icon check"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/02.jpg" alt=""></div><span>David Trent</span><span>Columbia</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/03.jpg" alt=""></div><span>Mirabella</span><span>LSE</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/04.jpg" alt=""></div><span>Josh June</span><span>Sciences Po</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/06.jpg" alt=""></div><span>Youssouf M'balé</span><span>UPenn</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/01.jpg" alt=""></div><span>Célia Marin</span><span>Science Po</span></a></li>
                                <li><a href="#" title="#" class="icon check"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/10.jpg" alt=""></div><span>Gaby Dolan</span><span>Cifacom</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/07.jpg" alt=""></div><span>Nicolas Lescop</span><span>Cifacom</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/09.jpg" alt=""></div><span>Nozomi</span><span>London School</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/08.jpg" alt=""></div><span>Salil</span><span>London School</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/06.jpg" alt=""></div><span>Célia Marin</span><span>Imperial</span></a></li>
                                <li><a href="#" title="#" class="icon check"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/03.jpg" alt=""></div><span>Mirabella</span><span>UCL</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/11.jpg" alt=""></div><span>Mathilde Leo</span><span>UCL</span></a></li>
                                <li><a href="#" title="#" class="icon check"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/08.jpg" alt=""></div><span>Célia Marin</span><span>London School</span></a></li>
                                <li><a href="#" title="#" class="icon check"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/12.jpg" alt=""></div><span>Saeed</span><span>UPenn</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/09.jpg" alt=""></div><span>Nozomi</span><span>LSE</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/04.jpg" alt=""></div><span>Josh June</span><span>Imperial</span></a></li>
                                <li><a href="#" title="#"><div class="overlay-placeholder"><div class="overlay"></div><img src="medias/avatars/01.jpg" alt=""></div><span>Célia Marin</span><span>Sciences Po</span></a></li>
                            </ul>
                            <div class="span-column-12 bottom-button">
                                <a href="#" id="skip-registration-part" class="blue-button">Skip</a>
                                <a href="#" id="next-registration-part" class="blue-button">Done</a>
                            </div>
                        </div> <!-- /Registration part 4 -->
                         <?php endif; ?>
                    </div>
                    <div class="inner-span-column-1 shift-1 arrow-container">
                        <a href="#" class="arrow big right" id="registration-next"></a>
                    </div>
                </div>

            <?php endif; ?>

            <?php if ($_GET['s'] == 'hoop'): ?>
                
                <div class="span-column-12">
                    <div id="sidebar" class="inner-span-column-2 omega">
                        <div id="tags" class="widget">
                            <h3>Tags</h3>
                            <ul class="tag-list">
                                <li>
                                    <a href="#" class="icon-tags environment small tags-widget">Environment</a>
                                    <a href="#" class="icon remove small tags-widget"></a>
                                </li>
                                <li><a href="#" class="icon-tags history small tags-widget">History</a><a href="#" class="icon remove small"></a></li>
                                <li><a href="#" class="icon-tags music small tags-widget">Music</a><a href="" class="icon remove small"></a></li>
                            </ul>
                            <form action="#" methdo="post">
                                <input type="text" name="add-tag" id="add-tag" placeholder="Add a new tag" />
                            </form>
                            <a href="#" title="" class="icon add" data-action="remove"></a>
                        </div>
                        <div id="contributors" class="widget">
                            <h3>Contributors</h3>
                            <div id="search-people">
                                <div class="slideshow">
                                    <div class="container">
                                        <div class="container-inner">
                                            <ul>
                                                <li class="slide">
                                                    <a href="#" title="Jeremy Keith">
                                                        <img src="medias/peoples/01.jpg" alt="Jeremy Keith">
                                                    </a>
                                                </li>
                                                <li class="slide"><a href="#" title="Matt Kopora"><img src="medias/peoples/02.jpg" alt="Matt Kopora" width="28" height="28"></a></li>
                                                <li class="slide"><a href="#" title="Barbara Palvin"><img src="medias/peoples/03.jpg" alt="Barbara Palvin" width="28" height="28"></a></li>
                                                <li class="slide"><a href="#" title="Matt Kopora"><img src="medias/peoples/02.jpg" alt="Matt Kopora" width="28" height="28"></a></li>
                                                <li class="slide"><a href="#" title="Barbara Palvin"><img src="medias/peoples/03.jpg" alt="Barbara Palvin" width="28" height="28"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slideshow-arrow">
                                        <a href="#" title="" class="horizontal small arrows left"></a>
                                        <a href="#" title="" class="horizontal small arrows right"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" title="" class="icon add" data-action="remove"></a>
                        </div>
                        <div id="ressources" class="widget">
                            <h3>Ressources</h3>
                            <ul class="list outline">
                                <li>
                                    <a href="#" title="">
                                        <img src="medias/documents/previews/01.png" alt="" width="28" height="28">
                                        <hgroup>
                                            <h2>Related</h2>
                                            <h1>Traité sur l'economie des sciences</h1>
                                        </hgroup>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="medias/documents/previews/01.png" alt="" width="28" height="28">
                                        <hgroup>
                                            <h2>Related</h2>
                                            <h1>Traité sur l'economie des sciences</h1>
                                        </hgroup>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="medias/documents/previews/01.png" alt="" width="28" height="28">
                                        <hgroup>
                                            <h2>Related</h2>
                                            <h1>Traité sur l'economie des sciences</h1>
                                        </hgroup>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" title="" class="icon add" data-action="remove"></a>
                        </div>
                        <div id="chat" class="widget">
                            <h3 class="icon medium chat">Chat</h3>
                            <ul class="list outline">
                                <li>
                                    <a href="#" title="" class="icon-state-chat online">Pascale André</a>
                                </li>
                                <li><a href="#" title="" class="icon-state-chat inactif">Nicolas Lescop</a></li>
                                <li><a href="#" title="" class="icon-state-chat busy">Thomas Jerfferson</a></li>
                                <li><a href="#" title="" class="icon-state-chat online active">Olivia Dunham</a></li>
                                <li><a href="#" title="" class="icon-state-chat offline">Bruno Bru</a></li>
                            </ul>
                            <a href="#" title="" class="icon add" data-action="remove"></a>
                        </div>
                    </div>
                    <div id="main-content" class="inner-span-column-8 omega">
                        <div id="temp-decorative-loop"></div>
                        <div id="tool-bar">
                            <header>
                                <h1>Hoop Title</h1>
                                <div>
                                    <ul class="list inline action-head">
                                        <li><a href="#" class="icon favorite small"></a></li>
                                        <li><a href="#" class="icon folder small"></a></li>
                                    </ul>
                                </div>
                            </header>
                            <section class="span-column-12">
                                <div class="inner-span-column-2 omega">
                                    <ul class="list inline action-file">
                                        <li><a href="#">File</a></li>
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Insert</a></li>
                                    </ul>
                                </div>
                                <div class="inner-span-column-10">
                                    <ul class="list inline action-typo">
                                        <li><a href="#" class="icon-typo uppercase"></a></li>
                                        <li><a href="#" class="icon-typo letter-modifier"></a></li>
                                        <li><a href="#" class="icon-typo abc"></a></li>
                                        <li><a href="#" class="icon-typo justify"></a></li>
                                        <li><select name="font-modifier" id="font-modifier">
                                            <option value="times">Times</option>
                                            <option value="arial">Arial</option>
                                            <option value="helvetica">Helvetica</option>
                                            <option value="comic-sans-ms">Comic Sans MS</option>
                                        </select></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div id="document">
                            <form action="#" method="post" id="hoop-document">
                                <textarea name="hoop-textarea" id="hoop-textarea"></textarea>
                                <span class="ghost"></span>
                            </form>
                        </div>
                    </div>

                    <div id="hoop-comments" class="inner-span-column-2">
                        <div id="test-comment1" class="comments">
                            <header>
                                <img src="medias/peoples/03.jpg" alt="">
                                <hgroup>
                                    <h3>Barbara Latvin</h3>
                                    <span class="since">Since 2 hours ago</span>
                                </hgroup>
                            </header>
                            <section>
                                <p>Super c'est exactement ce que je pense ! Mais tu devrais peut-être parler d'avantage des mammifères marins en milieu sub-aquatique hostile :):)</p>
                            </section>
                            <div class="triangle"></div>
                        </div>

                        <div id="test-comment2" class="comments">
                            <header>
                                <img src="medias/peoples/03.jpg" alt="">
                                <hgroup>
                                    <h3>Barbara Latvin</h3>
                                    <span class="since">Since 30 minutes ago</span>
                                </hgroup>
                            </header>
                            <section>
                                <p>N'oublie pas les ornithorynques ;)</p>
                            </section>
                            <div class="triangle"></div>
                        </div>
                    </div>

                </div>

            <?php endif; ?>
            
            

        </div>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
