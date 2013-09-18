window.showDisqusDialog = function( id ) {

	$( '#disqus_dialog' ).dialog({'width':800,'position':'top'});

	var identifier = url = location.protocol + '//' + location.hostname + location.pathname + '#!' + id

	//Reset Disqus to show the thread corresponding to the clicked button
	DISQUS.reset({
		reload: true,
		config: function () {
			this.page.identifier = identifier;
			this.page.url = url;
		}
	});
}

(function() {
	var dsq = document.createElement("script");
	dsq.type = "text/javascript";
	dsq.async = true;
	dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js";
	document.getElementsByTagName("body")[0].appendChild(dsq);
})();