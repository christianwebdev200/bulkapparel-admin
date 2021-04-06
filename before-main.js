function renderNote(note, notEditable) {
	var noteTemplate = '<li data-id="' + note.id + '">'
					+ '<p>'
						+ '<strong>' + note.name + '</strong>'
						+ '<span class="note-timestamp" data-id="' + note.id + '"> ' + note.updatedAt + '</span>'
						+ (!notEditable && note.createdAt != note.updatedAt ? '<a href="#" class="show-edit-logs" data-id="' + note.id + '">Edited</a>' : '')
					+ '</p>'
					+ '<div class="note-container">'
						+ '<p class="note-preview ' + ($('#user_id').val() == note.userId ? 'me' : '') + '" data-id="' + note.id + '">'
							+ note.note
						+ '</p>'
						+ '<textarea class="editorNote" style="display: none;" data-id="' + note.id + '">'
							+ note.note
						+ '</textarea>'
					+ '</div>';

	if (!notEditable && $('#user_id').val() == note.userId) {
		noteTemplate += '<div class="action-container">'
					+ '<a href="#" data-id="' + note.id + '" class="editNote">Edit</a>'
					+ '<a href="#" data-id="' + note.id + '" class="cancelNote" style="display: none;">Cancel</a>'
					+ '<a href="#" data-id="' + note.id + '" class="deleteNote">Delete</a>'
					+ '</div>';
	}
	noteTemplate += '</li>';

	return noteTemplate;

}


function loadSNSButtons(warehouse,orderno, ids = ""){

	var snsList = [
	    { 
	    	class: "sns-ground", 
	    	link:  "sendSbatchOrder",
	    	name:  "S&S Ground",
	    	submit:  "sns-ground-submit",
	    	checkbox: "snsGroundWare"
	    },
	    { 
	    	class: "sns-cheapest", 
	    	link:  "sendSCheapbatchOrder",
	    	name:  "S&S Cheapest",
	    	submit:  "sns-cheapest-submit",
	    	checkbox: "snsCheapWare"
	    },
	    { 
	    	class: "sns-short", 
	    	link:  "sendbtnShort",
	    	name:  "S&S Short",
	    	submit:  "sns-short-submit",
	    	checkbox: "snsShortWare"
	    },
	    { 
	    	class: "sns-short-cheap", 
	    	link:  "sendSNSCheapestShort",
	    	name:  "S&S Short Cheap",
	    	submit:  "sns-short-cheap-submit",
	    	checkbox: "snsShortCheapWare"
	    }
  	];

  	var sns = '';

  	snsList.forEach(function (item, index) {

  		var mainlink = adminUrl + 'orders/' + item.link + '/' + orderno + '?';

  		if(item.class == "sns-short" || item.class == "sns-short-cheap"){
  			if(ids != "" && ids.length > 0){
  				mainlink += 'selected_items='+ids.toArray().join(',');
  			}
  		}

		sns += '<li class="'+item.class+'">'
				+'<div class="btn-group">'
					+'<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" style="border: 0;">'+item.name+'</button>'
					+'<div class="dropdown-menu"><div class="dropdown-list-container"><a class="dropdown-item" href="'+mainlink+'">No preference</a>'

						warehouse.forEach(function (item1, index) {
							sns +='<a class="dropdown-item" href="'+mainlink+'&warehouse='+item1+'">Submit to <strong>'+item1+'</strong></a>'
							+'<span><input type="checkbox" class="chk-ware '+item.checkbox+'" name="'+item.checkbox+'[]" value="'+item1+'" data-type="'+item.checkbox+'"></span>';
						});	

						sns +='<a href="'+mainlink+'" class="submit-btn '+item.submit+'">Submit</a>'

					+'</div></div>'
				+'</div>'
			+'</li>';
	});				

  	return sns;
}
function loadSNSButtonsNoAPI(warehouse,orderno, ids = ""){

	var snsList = [
	    { 
	    	class: "sns-ground", 
	    	link:  "sendSbatchOrder",
	    	name:  "S&S Ground",
	    	submit:  "sns-ground-submit",
	    	checkbox: "snsGroundWare"
	    },
	    { 
	    	class: "sns-cheapest", 
	    	link:  "sendSCheapbatchOrder",
	    	name:  "S&S Cheapest",
	    	submit:  "sns-cheapest-submit",
	    	checkbox: "snsCheapWare"
	    },
	    { 
	    	class: "sns-short", 
	    	link:  "sendbtnShort",
	    	name:  "S&S Short",
	    	submit:  "sns-short-submit",
	    	checkbox: "snsShortWare"
	    },
	    { 
	    	class: "sns-short-cheap", 
	    	link:  "sendSNSCheapestShort",
	    	name:  "S&S Short Cheap",
	    	submit:  "sns-short-cheap-submit",
	    	checkbox: "snsShortCheapWare"
	    }
  	];

  	var sns = '';

  	snsList.forEach(function (item, index) {

  		var mainlink = adminUrl + 'orders/' + item.link + '/' + orderno + '?';

  		if(item.class == "sns-short" || item.class == "sns-short-cheap"){
  			if(ids != "" && ids.length > 0){
  				mainlink += 'selected_items='+ids.toArray().join(',');
  			}
  		}

		sns += '<li class="'+item.class+'">'
				+'<div class="btn-group">'
					+'<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" style="border: 0;">'+item.name+'</button>'
					+'<div class="dropdown-menu"><div class="dropdown-list-container"><a class="dropdown-item" href="'+mainlink+'">No preference</a>'

						sns +='<a href="'+mainlink+'" class="submit-btn '+item.submit+'">Submit</a>'

					+'</div></div>'
				+'</div>'
			+'</li>';
	});				

  	return sns;
}
function loadAlphaButtons(warehouse,orderno, ids = ""){

	var alphaList = [
	    { 
	    	class: "alpha-ground", 
	    	link:  "sendAbatchOrder",
	    	name:  "Alpha Ground",
	    	submit:  "alpha-ground-submit",
	    	checkbox: "alphaGroundWare"
	    },
	    { 
	    	class: "alpha-cheapest", 
	    	link:  "sendASurePostbatchOrder",
	    	name:  "Alpha Cheapest",
	    	submit:  "alpha-cheapest-submit",
	    	checkbox: "alphaCheapWare"
	    },
	    { 
	    	class: "alpha-short", 
	    	link:  "sendAlphaShort",
	    	name:  "Alpha Short",
	    	submit:  "alpha-short-submit",
	    	checkbox: "alphaShortWare"
	    },
	    { 
	    	class: "alpha-short-cheap", 
	    	link:  "sendAlphaCheapestShort",
	    	name:  "Alpha Short Cheap",
	    	submit:  "alpha-short-cheap-submit",
	    	checkbox: "alphaShortCheapWare"
	    }
  	];

  	var alpha = '';

  	alphaList.forEach(function (item, index) {

  		var mainlink = adminUrl + 'orders/' + item.link + '/' + orderno + '?';

  		if(item.class == "alpha-short" || item.class == "alpha-short-cheap"){
  			if(ids != "" && ids.length > 0){
  				mainlink += 'selected_items='+ids.toArray().join(',');
  			}
  		}

		alpha += '<li class="'+item.class+'">'
				+'<div class="btn-group">'
					+'<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" style="border: 0;">'+item.name+'</button>'
					+'<div class="dropdown-menu"><div class="dropdown-list-container"><a class="dropdown-item" href="'+mainlink+'">No preference</a>'

						warehouse.forEach(function (item1, index) {
							alpha +='<a class="dropdown-item" href="'+mainlink+'&warehouse='+item1+'">Submit to <strong>'+item1+'</strong></a>'
							+'<span><input type="checkbox" class="chk-ware '+item.checkbox+'" name="'+item.checkbox+'[]" value="'+item1+'" data-type="'+item.checkbox+'"></span>';
						});	

						alpha +='<a href="'+mainlink+'" class="submit-btn '+item.submit+'">Submit</a>'

					+'</div></div>'
				+'</div>'
			+'</li>';
	});				

  	return alpha;
}

