<?php 
include_once('./app/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Placem.at PHP CLASS</title>
</head>
<body>	
	<h1>Placem.at UNOFFICIAL php class</h1>
	<h3>Last updated 24/10/2017</h3>

	<h2>What is this repository for?</h2>
	<p>
		This is an unofficial php class for http://placem.at that will allow you to generate random place holder images.
		<pre data-initialized="true" data-gclp-id="0"><span></span><span class="cp">&lt;?php</span> 
		<span class="nv">$place</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">place</span><span class="p">;</span>
		<span class="cp">?&gt;</span>
		<span class="o">&lt;</span><span class="nx">img</span> <span class="nx">src</span><span class="o">=</span><span class="s2">"</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$place</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">'w'</span><span class="o">=&gt;</span> <span class="s1">'500'</span><span class="p">,</span> <span class="s1">'h'</span><span class="o">=&gt;</span> <span class="s1">'500'</span><span class="p">,</span> <span class="p">))</span><span class="cp">?&gt;</span><span class="s2">"</span><span class="o">&gt;</span>
		</pre>
	<?php 
		$place = new place;
	?>
	<img src="<?php echo $place->get(array('w'=> 500, 'h'=> 500, 'random'=>'1', ));?>">
	</p>
	<p>
		See readme for information
	</p>
</body>
</html>