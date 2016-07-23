/**
 * common javascript
 */
var common = common || {};

common.init = function($) {
	// PROCESS
	// ======================================================================

	// EVENT
	// ======================================================================

	// LIBRARY / API
	// ======================================================================

};

// METHODS
// ======================================================================

common.submit = function(action, params) {

	var urlParam = '';
	if (Array.isArray(params)) {
		urlParam = '/' + params.join('/')
	}
	var myself = $('#myself').val();
	var rootPath = $('#root').val();
	var form = document.getElementById(myself + 'Form');

	// console.log(rootPath + myself + action + urlParam);
	form.action = rootPath + '/' + myself + '/' + action + urlParam;
	form.submit();
};

common.isPressedEnter = function(e) {

	return e.keyCode == 13;
};