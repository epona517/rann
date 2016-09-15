/**
 * Approve javascript
 */

function Approve () {};

var common = common || {};
// INITIALIZATION
// ======================================================================
Approve.prototype.init = function () {
	// PROCESS
	// ======================================================================

	// ACTION
	// ======================================================================
	$('#button-modal').click(function() {
		Approve.prototype.openModal('test');
	});

	// EVENT
	// ======================================================================

};


// METHODS
// ======================================================================
Approve.prototype.openModal = function(id) {
	var options = {
		title: 'テスト',
		width: 600,
		buttons: {
			'OK': function() {
				$(this).dialog('close');
			},
			'ｷｬﾝｾﾙ': function() {
				$(this).dialog('close');
			}
		}
	};

	$('#modal_' + id)
		.dialog(Object.assign(options, common.modalOptionsDef))
		.html($('#modal_' + id).html())
		.dialog('open');
};