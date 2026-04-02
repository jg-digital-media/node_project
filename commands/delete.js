const { loadNotes, saveNotes } = require("../utils/file");

function deleteNote(id) {

    const notes = loadNotes();

    const filtered = notes.filter(n => n.id !== parseInt(id));

    if (notes.length === filtered.length) {
        
        console.log("Note not found.");
        return;
    }

  saveNotes(filtered);
  console.log("Note deleted.");
}

module.exports = deleteNote;