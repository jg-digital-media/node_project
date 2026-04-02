// open the file system
const fs = require("fs");
const path = require("path");

const filePath = path.join(__dirname, "../notes.json");


// helper function - load notes
function loadNotes() {

  if (!fs.existsSync(filePath)) return [];

  const data = fs.readFileSync(filePath, "utf-8");

  return JSON.parse(data);
}


// helper function - save notes
function saveNotes(notes) {

  fs.writeFileSync(filePath, JSON.stringify(notes, null, 2));
}


module.exports = {

    loadNotes,
    saveNotes
};