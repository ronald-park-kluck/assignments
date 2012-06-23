$(document).ready(function () {
	var $tabs = $('.text-field')
		, $btns = $('.tab-btn')
		, loadedTabs = {}
	;

	function loadTab (tab) {
		$tabs.load(tab, function (data) {
			loadedTabs[tab] = data;
			$tabs.fadeIn();
		});
	}

	loadTab($('.current-tab a').attr('href'));

	$('.tab-btn a').click(function (ev) {
		var tab = $(this).attr('href');

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

