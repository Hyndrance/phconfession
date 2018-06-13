<!--
<div id="mImageBox">
<img id='my_image' src='include/test.jpeg' alt='' width="auto" height="auto" onclick="fbs_click(this)"/>
</div>

<script>
     function fbs_click(TheImg) {
     u=TheImg.src;
     // t=document.title;
    t=TheImg.getAttribute('alt');
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t=hehehe'+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;

}
</script>
-->

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
<meta id="metaContent" property="og:image">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="1024">
</head>
<body>
<div id="html-content-holder" class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
            <div class="card-icon" style="height:10px;background:#fc9209;color:white;">
                <div style="margin-top:-10px;">category name</div>
            </div>
            <p class="card-category">10 mins ago</p>
            <div style="height:180px;">
              <p style="color:black;text-align:justify;font-weight:bold;">title</p>
              <p style="color:black;text-align:justify;">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do orum.
              </p>
            </div>
            <div style="height:40px;">
              <div style="color:gray;font-weight:bold;font-style:italic;">- james</div>
              <div style="color:gray;font-style:italic;">bacolod</div>
            </div>
        </div>
        <div class="card-footer">
              <div class="stats">
                  <i class="material-icons" style="color:red;">favorite</i>
                  <span>5 </span>&nbsp;Relates
              </div>

            <div class="stats">
                <i class="material-icons">chat</i>
                4 comments
            </div>

            <div class="stats">
                <i class="material-icons">visibility</i>
                4 views
            </div>
        </div>
    </div>
</div>
    <br/>
    <h3>Preview :</h3>
<img id="MyImg" onclick="fbs_click(this)"/>

<div class="stats">
  <br>
    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2F%2Findex.php%3Fview%3Dtesting&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId"
      width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>

<script>
$(document).ready(function(){

var element = $("#html-content-holder"); // global variable

    html2canvas(element, {
    onrendered: function (canvas) {
            var imgSrc = canvas.toDataURL("image/png");
            $('#MyImg').attr('src', imgSrc);
            $('#metaContent').attr('content', imgSrc);
        }
    });
});

function fbs_click(TheImg) {
u=TheImg.src;
// t=document.title;
t=TheImg.getAttribute('alt');
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t=hehehe'+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;

}

</script>
</body>
</html>
