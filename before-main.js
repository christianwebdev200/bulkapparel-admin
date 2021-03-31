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
