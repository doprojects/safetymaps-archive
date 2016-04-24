<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Safety Maps: Make A Safety Map</title>
        <link rel="stylesheet" type="text/css" href="./fonts/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="./style.css" />
<link rel="icon" type="image/png" href="./images/favicon.png">        <link rel="stylesheet" type="text/css" href="./make-a-safety-map.css" />
        <script type="text/javascript" src="/jquery.min.js"></script>
        <script type="text/javascript" src="/modestmaps.js"></script>
        <script type="text/javascript" src="/cloudmade.js"></script>
        <script type="text/javascript" src="/round-em-up.js"></script>
        <script type="text/javascript" src="/anyzoom.js"></script>
        <script type="text/javascript" src="/make-a-safety-map.js"></script>
    </head>
    <body>

        <div id="header">
    <a href="./"><img src="/images/header.png" width="860" height="137" alt="Safety Maps: Make and share maps of safe places to meet in the event of an emergency"></a>
    <div id="nav">
        <ul>
            <li><a class="" href="./">Home</a></li>
            <li><a class="" href="./about.php">About</a></li>
            <li><a class="current" href="./make-a-safety-map.php">Make a Safety Map</a></li>
                        <li><a class="" href="./resources.php">Resources</a></li>
        </ul>
    </div>
</div>
        <div id="main">

            <h2>Make a Safety Map.</h2>

            <p class="intro">By answering these few simple questions, you can make a
               custom map of a place you think it will be safe for your
               friends, family or loved ones to meet in the event of an
               emergency.</p>

             <p class="intro">You can print this map out in a variety of formats, share
                it via email, or both. Either way, you'll be able to
                include a personal message to recipients.</p>

            <div id="make">

                <form id="mapform" method="POST" action="make-a-safety-map.php">


                <table>
                <tr class="first"><td class="inputs">




                    <p>
                        In case of
                        <span id="emergency-chooser" style="">
                          <select id="emergency-select" name="place[emergency]"> <option>an emergency</option> <option>an earthquake</option> <option>a blackout</option> <option>a fire</option> <option>a flood</option> <option>a public transportation failure</option> <option id="otherplace" value="other">Other (please specify)</option> </select><input id="emergency-other" style="display: none;" name="" value="" type="text" size="32">
                        </span>
                        let's meet at
                        <input type="text" name="place[name]" size="25" class="required">.
                        I've marked the spot on this map:
                    </p>

                   </td><td class="help">&nbsp;</td></tr>

                   <tr><td class="inputs">

                    <input type="hidden" id="loc0" name="place[location][0]" value="">
                    <input type="hidden" id="loc1" name="place[location][1]" value="">
                    <input type="hidden" id="bbox0" name="map[bounds][0]" value="">
                    <input type="hidden" id="bbox1" name="map[bounds][1]" value="">
                    <input type="hidden" id="bbox2" name="map[bounds][2]" value="">
                    <input type="hidden" id="bbox3" name="map[bounds][3]" value="">

                    <div id="bboxmap"><noscript>Please enable javascript and refresh this page to choose your location using our interactive map. Sorry for the inconvenience!</noscript></div>

                    </td><td class="help">
                    <p>Drag and zoom the map to change the area that will be printed.</p><p>You can scroll with your mouse, double-click or use the ╋ and ━ buttons to zoom.</p>
                    <p>Be sure to zoom close enough to see nearby streets!</p>
                    <p class="thoughtful">If you want an off-center map you can drag the green marker directly to fine tune your precise meeting point.</p>
                    </td></tr>

                    <tr class="last"><td class="inputs">
                    <p class="field">
                        <textarea name="place[note_full]" id="fullnote" rows="8"></textarea>
                        <br>
                        <span id="charcount"></span>
                    </p>
                    </td><td class="help">
                        <p>Include a personal note for your recipients.<br><em>(50-60 words, we'll measure the height for you)</em></p>
                    <p class="thoughtful">Remember that the recipient might be reading this at a very difficult moment, so please think carefully about what you want to write here!</p>

                    </td></tr>

                    </table>

                    <h3>Who's this map for?</h3>

                    <p>
                        Enter the names and email addresses of people you'd like to share this Safety Map with.
                    </p>
                    <ol id="recipients">

                                                <li>
                            name: <input type="text" name="recipients[0][name]" class="required" size="15">
                            email: <input type="email" name="recipients[0][email]" placeholder="e.g. them@there.com" class="required" size="35">
                            <a class="remove-recipient" href="#">━ Remove recipient</a>
                        </li>

                                                                    </ol>

                                        <p>
                        <a id="add-recipient" href="">╋ Add recipient</a>
                    </p>

                    <h3>You're almost done.</h3>

                    <p>Now that you've chosen a safe place to meet, you're ready to make and print your maps.</p>

                    <p>
                        What's your name or nickname?
                        <input type="text" name="sender[name]" class="required" placeholder="e.g. Your Name">
                    </p>
                    <p>
                        What's your email address?
                        <input type="email" name="sender[email]" class="required" placeholder="e.g. you@example.com" size="35">
                    </p>
                    <p>
                        Who can see your map?
                        <input type="radio" name="map[privacy]" value="public">Everyone
                        <input type="radio" name="map[privacy]" value="unlisted" checked>Just you and your recipients.
                    </p>

                    <p id="done"><button type="submit">Go!</button></p>

                </form>

            </div>

        </div>

        <div id="footer">
    <p><a href="http://doprojects.org"><img src="/images/mail-do-logo.png" alt="Do Projects" width="42" height="21"></a> &copy;2011 <a href="http://doprojects.org">Do projects</a>.</p>
    <p>Safety Maps is offered to you under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0">Creative Commons Attribution-Noncommercial-Share Alike license</a>.</p>
    <p>Map images are &copy;CloudMade and <a href="http://openstreetmap.org">OpenStreetMap.org</a> contributors, used under the <a href="http://creativecommons.org/licenses/by-sa/2.0/">Creative Commons Attribution-Share Alike license</a>.</p>
</div>


<script type='text/javascript'> var mp_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://'); document.write(unescape('%3Cscript src="' + mp_protocol + 'api.mixpanel.com/site_media/js/api/mixpanel.js" type="text/javascript"%3E%3C/script%3E')); </script> <script type='text/javascript'> try {  var mpmetrics = new MixpanelLib('0b0dd22f79d787f91f1a1bcaff135509'); } catch(err) { null_fn = function () {}; var mpmetrics = {  track: null_fn,  track_funnel: null_fn,  register: null_fn,  register_once: null_fn, register_funnel: null_fn }; } </script>
<script type='text/javascript'> mpmetrics.track("view make-a-map form", {}); </script>

    </body>
</html>