<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="en">
<HEAD>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="description" content="Portfolio Matthieu Cormier">
<meta name="keywords" content="Portfolio Matthieu Cormier">

<Title>
 Matthieu Cormier: Portfolio: Sample Work
</title>


<Link rel="stylesheet" type="text/css" href="portfolio.css" title="stylin">
</HEAD> <BODY> 

<h2>Matthieu Cormier: Portfolio: Sample Work </h2>


<?php include 'topMenu.inc' ?>




<!--
<BR>
<quote> <i>"If you're not taking 10% of your time, every day, as a professional,
to improve your skills, you're making a mistake" </i></quote><BR><BR>
<DD>- Rick Gessner, Netscape</DD>
-->
<a href="goodCode.m4a">
<img src="images/sound2.gif" border=0 align=right>
</a>
<BR>
<quote style="	font:  .75em/1.3 Verdana, Arial, Helvetica, sans-serif;"> <i >
If I can see your code,<BR>
I'm a lot more apt to even consider hiring,<BR>
Show me the code, let me see what's going on,<BR>
Let me see how you've done, I mean,<BR>
Show me the code,<BR>
If you can show me the stuff,<BR>
And you can show that you can come up with something innovative or new,<BR>
or something that is just good,<BR>
We can all admit, there's a lot of people that write bad code,<BR>
It doesn't matter who you work for,<BR>
<BR>
You show me bad code that has gotten better, <BR>
and I'll be more impressed,<BR>
You show me good code that's gotten great,<BR>
and I'll be very impressed.<BR>


</i></quote><BR>
<DD style="	font:  .8em/1.3 Verdana, Arial, Helvetica, sans-serif;"> -  Eric Peyton, The originator of Fire.app

</DD>
<BR>
<h3>Preamble</h3>
<p>
	The following applications have been released as open source by myself. 
	Latest developments of released software can be found 
	<a href="http://allusions.sourceforge.net/" target="_blank" >here.</a>
</p>

<BR>
<HR>
<BR>


<h3>Laughing Man - web page monitoring tool</h3>
<B>Description</b><BR>
<img src="images/lmanLogo.gif" border="0" align="right" style="margin-left: 20px; margin-bottom: 100px;" > 
<P> Laughing Man tracks changes to web sites.  If available, it uses a 
web servers last modified date, otherwise it
uses a hash code based on the contents of the page.
</P><p>
Laughing Man requires OS X, as the controller is written 
in Cocoa/Java.  However, the underlying architecture of the application is pure Java,
and it can be run on any operating system if an appropriate controller is written. 
</P>
<p>
  The use of multiple data storage methods was explored when building
  Laughing Man.  Laughing Man supports the following four different
  data sources: SAX, DOM, mySQL, and Java XML beans.
</p>
<b>Programming Language:</b> Java <br/>
<b>Operating System:</b> OS X <br/>
<UL>
	<LI><a href="http://prdownloads.sourceforge.net/allusions/laughingMan0_5source.tar.gz?download" target="_blank">Download sample source code</a>
	<LI><a href="images/arch_1.0.jpg" >View class diagram</a>
	<li><a href="http://allusions.sourceforge.net/laughMan" target="_blank"> Go to the Laughing Man web site</a>
</UL>




<BR>
<HR>
<BR>


<h3>Allusions - a conceptual media mapping project</h3>
<B>Description</b><BR><BR>
<img src="images/allusionsLogo.jpg" border="0" align="right" style="margin-left: 20px; margin-bottom: 100px;" > 
<quote style="	font:  .75em/1.3 Verdana, Arial, Helvetica, sans-serif;">
<b>[allusion]</b> <i>n.</i> a reference, esp. a covert, passing, or indirect one.  Often 
	confused with <i>illusion</i>.
</quote>

	<p>
	Allusions is a media game. 
	A user watches television, movies, reads books, if any of these 
	media reference another media the user then maps this in their allusions application.
	</p>

<P> 
Allusions was prototyped with Java and Swing and runs on multiple platforms; it also
implements the model-view-controller pattern.  The concept of software for 
graphing allusory mappings is a good example of the creative angles I can help
bring to tasks.
</P>

<b>Programming Language:</b> Java <br/>
<b>Operating System:</b> System independent <br/>
<UL>
	<LI><a href="sampleCode/allusions_source.zip">Download sample source code</a> full source is available on sourceforge.net
</UL>
<BR>
<center>
<img src="images/Allusions_cap.gif" border=1>
<BR> Sample Allusions Graph
</center>





<BR>
<HR>
<BR>


<h3>Fat Cat - a simple Zap2it client</h3>


<B>Description</b><BR>
<img src="images/fatCatLogo.gif" border="0" align="right" style="margin-left: 20px; margin-bottom: 100px;" > 
<P> 
<a href="http://labs.zap2it.com" target="_blank">
Zap2it</a>
 provided a free web service to retrieve TV listings using SOAP. After
 creating a zap2it account you could use Fat Cat to download and browse your local TV listings.
 Fat Cat was released in 2004 had six releases, and was available until 
 the spring of 2007, when zap2it removed the service due to commercial abuse.
</P>

<p>
The name of the application is derived from the size of the final executable.  Although only 3 classes were written
to create the application, the required Jar libraries were linked into the final executable, creating a program
of over 2 megabytes in size.  The Java libraries were linked into the final application to allow any non-technical
OS X user to use the application. This shows that I do consider how to leverage existing software, before 
writing something.  Fat Cat requires OS X because the controller uses Cocoa/Java for its interface.  
</p>

<b>Programming Language:</b> Java <br/>
<b>Operating System:</b> OS X <br/>
<UL>
	<LI><a href="sampleCode/fatcat_source.zip">Download sample source code</a>
	<!-- <li><a href="http://allusions.sourceforge.net/fatcat/" target="_blank"> Go to the Fat Cat web site</a> -->
</UL>

<BR>




<?php include 'bottomMenu.inc' ?>
<BR>

</BODY>
</HTML>
