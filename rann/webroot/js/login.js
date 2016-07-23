/**
 * login javascript
 */
var common = common || {};
var login = login || {};


// INITIALIZATION
// ======================================================================
login.init = function () {
	// PROCESS
	// ======================================================================
	$('#loginId').focus();

	// ACTION
	// ======================================================================
	// 【ログインボタン】押下
	$('#button-login').click(function() {
		common.submit('auth');
	});

	// 【ログインID/PW】エンター押下
	$('.js_enterSubmit').keypress(function(e) {

		if (common.isPressedEnter(e)) {
			$('#button-login').click();
		}
	});

	// EVENT
	// ======================================================================

};


// METHODS
// ======================================================================
