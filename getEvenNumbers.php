<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>getEvenNumbers</title>
</head>

<body>
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;Get Even Numbers&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;form action=&quot;getEvenNumbers.php&quot; method = &quot;GET&quot;&gt;<br />
&lt;input type = &quot;text&quot; name = &quot;number&quot;&gt;<br />
&lt;input type = &quot;submit&quot; value = &quot;submit&quot;&gt;<br />
&lt;?php<br />
$n = $_GET['number'];<br />
$i = 0;<br />
for($i = 0; $i &lt; ($n - 1)/2; $i++) {<br />
echo &quot;&lt;br&gt;&quot;.(2*$i + 2).&quot;&lt;/br&gt;&quot;;<br />
}<br />
?&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;
</body>
</html>