<?php
return <<<EOF
<style>
body {
  background-color: #FCF8DC;
}
.my {
  font: italic bold 25px arial, sans-serif;
}
.photochannel {
  font: bold 35px Arial, Verdana, sans-serif;
  letter-spacing: -2px;
}
#myphotochannelheader {
  text-align: center;
}
#myphotochannelheader h1 {
  margin-top: -20px;
}
#myphotochannelheader img {
  border: none;
}
</style>
<div id="myphotochannelheader">
<a href="http://www.myphotochannel.com">
<img src="../images/myphotochannel.png"/></a>
$mainTitle
</div>
<hr>
EOF;

