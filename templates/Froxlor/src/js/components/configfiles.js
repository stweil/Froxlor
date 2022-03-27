$(document).ready(function () {
	/*
	 * config files - select all recommended
	 */
	$('#selectRecommendedConfig').click(function () {
		$('input[data-recommended]').each(function () {
			if ($(this).data('recommended') == 1) {
				$(this).prop('checked', true);
			} else {
				$(this).prop('checked', false);
			}
		})
	});
});