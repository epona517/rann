/**
 * common javascript
 */
// var common = common || {};
function Common (myself, root) {
	this.myself = myself;
	this.root = root;
};


Common.prototype.init = function() {
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
		effect: 'fade'
	},
	hide: {
		duration: 300,
		easing: 'swing',
		effect: 'fade'
	}
}

Common.prototype.modalOpen = function(id, options) {

	var $modal = $('#modal_' + id);
	if (!$modal.length) {
		console.log('ModalのHTML要素が存在しません。')
		return false;
	}

	$modal
		.dialog(Object.assign(options, Common.prototype.modalOptionsDef))
		.html($modal.html())
		.dialog('open');
}