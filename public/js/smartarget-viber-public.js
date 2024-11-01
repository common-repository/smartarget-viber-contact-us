function init_viber (hash)
{
	if (!hash)
	{
		return;
	}

	insertJs_viber(hash);
}

function insertJs_viber (hash)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = `https://smartarget.online/loader.js?ver=${Math.random()}&u=${hash}&source=wordpress_viber`;
	document.head.appendChild(script);
}

init_viber(smartarget_viber_params.hash);
