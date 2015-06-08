<?php
include("views/head.php");
require_once("classes/Login.php");

?>


<div id="wufoo-r1e8niwt0r3nn5q">
Fill out my <a href="https://causbuzz2.wufoo.com/forms/r1e8niwt0r3nn5q">online form</a>.
</div>
<script type="text/javascript">var r1e8niwt0r3nn5q;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'causbuzz2',
'formHash':'r1e8niwt0r3nn5q',
'autoResize':true,
'height':'1246',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { r1e8niwt0r3nn5q = new WufooForm();r1e8niwt0r3nn5q.initialize(options);r1e8niwt0r3nn5q.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>




<?php
include("views/foot.php");
?>
