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
	$('.js-btn-group').buttonset();

	// ACTION
	// ======================================================================
	$('#button-set-conditions').click(function() {
		Approve.prototype.openSearchModal('approve_search');
	});

	// EVENT
	// ======================================================================

};


// METHODS
// ======================================================================
Approve.prototype.openSearchModal = function(id) {
	var options = {
		title: '検索条件設定',
		width: 760,
		buttons: [
			{
				html: '<i class="fa fa-fw fa-search"></i>' + '検索',
				id: 'modal-button-search',
				click: function() {
					$(this).dialog('close');
				}
			},
			{
				html: 'キャンセル',
				id: 'modal-button-cancel',
				click: function() {
					$(this).dialog('close');
				}
			}
		]
	};

	common.modalOpen(id, options);
};