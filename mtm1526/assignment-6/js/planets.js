$(document).ready(function () {
	var $tabs = $('.text-field')
		, $btns = $('.tab-btn')
		, loadedTabs = {}
	;

	function loadTab (tab) {
		console.log(tab);
		$tabs.load(tab, function (data) {
			loadedTabs[tab] = data;
			$tabs.fadeIn();
		});
	}


	$('.tab-btn a').click(function (ev) {
		var tab = $(this).attr('href');
		tab = 'includes/' + tab.replace(/\?planet\=/, '') + '.php';
		
		ev.preventDefault();

		$tabs.fadeOut(function () {
			if (!loadedTabs[tab]) {
				loadTab(tab);
			} else {
				$tabs.html(loadedTabs[tab]).fadeIn();
				$btns.removeClass('is-loading');
			}
		});

		$('.tab-btn > li').removeClass('current-tab');
		$(this).parent().addClass('current-tab');
	});
});


