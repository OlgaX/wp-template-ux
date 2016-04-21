//add <script> tag in document
window.$zopim || (function(d, s) {
	var z = $zopim = function(c) {
		z._.push(c)
	}, $ = z.s = d.createElement(s),
		e = d.getElementsByTagName(s)[0];
	z.set = function(o) {
		z.set._.push(o)
	};
	z._ = [];
	z.set._ = [];
	$.async = !0;
	$.setAttribute('charset', 'utf-8');
	$.src = '//v2.zopim.com/?xwzASiZfXmIZvbjoYBIdDdw55lTdDa09';
	z.t = +new Date;
	$.type = 'text/javascript';
	e.parentNode.insertBefore($, e)
})(document, 'script');

//ZopimClear function
function ZopimClear(DomainNameGlobal) {
	$(window).load(function(){
		function createCookie(name,value,expiresDate,domainName) {
			document.cookie = name + "=" + value + "; expires=" + expiresDate +  "; domain" + "=" + domainName + "; path=/";
		}
		function readCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}

		var read = readCookie('ZopimSession');
		console.log(DomainNameGlobal);
		if (read==null)	{
			createCookie('ZopimSession','',0,DomainNameGlobal);
			$zopim.livechat.clearAll();
		}
	});
}

//custom options
$zopim(function() {
	$zopim.livechat.theme.setColor('#328585');
	$zopim.livechat.theme.reload(); // apply new theme settings
});
