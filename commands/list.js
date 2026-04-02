const { loadNotes } = require("../utils/file");

function listNotes() {

    const notes = loadNotes();

    if (notes.length === 0) {

        console.log("No notes found.");
        return;
    }

    notes.forEach(note => {

        console.log(`${note.id}: ${note.text}`);
    });
    
}

module.exports = listNotes;