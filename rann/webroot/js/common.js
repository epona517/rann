/**
 * common javascript
 */
// var common = common || {};
function Common (myself, root) {
	this.myself = myself;
	this.root = root;
};


Common.prototype.init = function($) {
	// PROCESS
	// ======================================================================

	// EVENT
	// ======================================================================

	// LIBRARY / API
	// ======================================================================

};

// METHODS
// ======================================================================

Common.prototype.submit = function(action, params) {

	var urlParam = '';
	if (Array.isArray(params)) {
		urlParam = '/' + params.join('/')
	}

	var form = document.getElementById(this.myself + 'Form');

	form.action = this.root + '/' + this.myself + '/' + action + urlParam;
	form.submit();
};

Common.prototype.isPressedEnter = function(e) {

	return e.keyCode == 13;
};

Common.prototype.modalOptionsDef = {
	modal: true,
	position: {
		at: 'center top',
		my: 'center top'
	},
	autoOpen: false,
	show: {
		easing: 'swing',
		effect: 'blind'
	},
	hide: {
		duration: 300,
		easing: 'swing',
		effect: 'blind'
	}
}