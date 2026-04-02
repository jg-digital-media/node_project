const { loadNotes, saveNotes } = require("../utils/file");

function addNote(text) {

    const notes = loadNotes();
  
    // create an object to store the new note
    const newNote = {

        id: notes.length + 1,
        text
    };

    // add and save the new note
    notes.push(newNote);
    saveNotes(notes);

    // confirm the note has been added to terminal
    console.log("Note added!");   

    // console.log("Adding note:", args[1]);
}

module.exports = addNote;