<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?> 
<movies> 
<movie> 
<title> PHP: Behind the Parser </title> 
<characters> 
<character> 
<name> Ms. Coder </name> 
<actor> Olivia Actora </actor> 
</character> 
<character> 
<name> Mr. Coder </name> 
<actor> El Act&#211;r </actor> 
15 
</character> 
</characters> 
<plot> 
So, this language. It's like, a programming language. Or is it a 
scripting language? All is revealed in this thrilling horror spoof of 
a documentary. 
</plot> 
<rating type="thumbs"> 7 </rating> 
<rating type="stars"> 5 </rating> 
</movie> 
</movies> 
XML;
