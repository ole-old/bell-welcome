<?php
if ($_SERVER['SERVER_ADDR'] != $_SERVER['SERVER_NAME']) {
  header('Location: http://' . $_SERVER['SERVER_ADDR'], true);
}
?>

<html><body>
<img src="./ole.png" style="float:right; clear:both"><br>
<p><h1>Hi</h1></p>
<p>We've collected a few URLs here for you to check out.  In the URLs below, this page is detecting the IP Address of the Raspberry Pi so that you know the URL for devices that are incompatible with mDNS (that's what makes the nice http://raspberrypi.local address possible). For devices that are mDNS compatible (Linux, Mac, and most Windows machines), you can refer to the server in URLs using http://raspberrypi.local as opposed to the IP Address http://<?php print $_SERVER['SERVER_ADDR']; ?>. Note that <b>Android does not currently support mDNS</b>.
<p><img width=400 src="./bell.jpg" style="float:right"><p>
<p>For SSH, CouchDB, and BeLL Library App accounts, we set up a universal user...</p>
<p>User: pi <br> Password: raspberry </p>
<p><h2>Library Example</h2></p>
<p><a href="http://<?php print $_SERVER['SERVER_ADDR']; ?>:5984/library-starter/_design/library/app.html">Starter</a> - http://<?PHP print $_SERVER['SERVER_ADDR']; ?>:5984/library-starter/_design/library/app.html</p>
<p>Under the bell-training subject, check out the BeLL Ground Server Manual for in depth documentation on what we've been designing.</p>
<p><h2>Management Interface</h2></p>
<p><a href="http://<?php print $_SERVER['SERVER_ADDR']; ?>:5984/_utils">CouchDB</a> - http://<?PHP print $_SERVER['SERVER_ADDR']; ?>:5984/_utils</p>

<p>If you want to check out the code we're working on or even collaborate with us on code, <a href="https://github.com/open-learning-exchange">check out the Open Learning Exchange page on GitHub</a>.

<p>Enjoy! <br> -- stefan@unterhauser.name and <a href="https://github.com/rjsteinert">rj@ole.org</a></p>
<img src="./dogi.png"><img src="./rj.png">
</body></html>
