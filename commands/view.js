const { loadNotes } = require("../utils/file");

function viewNote(id) {

    const notes = loadNotes();

    const note = notes.find(n => n.id === parseInt(id));

    if (!note) {

        console.log("Note not found.");
        return;
    }

    console.log(note.text);
}

module.exports = viewNote;