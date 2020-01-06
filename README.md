<h1>Send Feedback with highlight area using HTML2 Canvas and Jquery in PHP</h1>
<h2>Getting Started</h2>
<p>In this tutorial how to send feedback or support with the image highlighted area using HTML canvas in PHP. you have to follow basic  steps for send feedback.We will use HTML canvas.js file for draw highlighted area and one javascript file for some function.I write a    very simple example for send feedback with PHP and Jquery step by step so you can easily use in your Program
</p>
<h1>Installation & Usage:</h1>
<ol><li>In your<code>&lt;head&gt;</code>section, add the following <em>stylesheet</em> links</li></ol>
<pre><code>  &lt;link href="css/support-UI.css" rel="stylesheet"&gt;</code></pre>
<ol start="2"><li>Before the end of your<code>&lt;body&gt;</code>section, add the following <em>javascript</em> links. This library depends on jQuery, so jQuery must also be included, before these scripts are run</li></ol>
<pre><code>  &lt;script src="http://code.jquery.com/jquery-latest.min.js"&gt;&lt;/script&gt;
  &lt;script src="js/support-UI.js"&gt;&lt;/script&gt;                                                                      
</code></pre>
<ol start="3"><li>Add this <code>&lt;script&gt;</code>function before the close <code>&lt;body&gt;</code>section.</li></ol>
<pre><code>&lt;script type="text/javascript"&gt;
  document.addEventListener('DOMContentLoaded', function () {
      $.feedback({
        ajaxURL: 'store-support-data.php' ,
        html2canvasURL: 'js/html2canvas.js',
        onClose: function() { window.location.reload(); }
      });
    }, false);
&lt;/script&gt;</code></pre>
