#!/usr/bin/env node

const args = process.argv.slice(2);
const command = args[0];

// Import commands
const addNote = require("./commands/add");
const listNotes = require("./commands/list");
const viewNote = require("./commands/view");
const deleteNote = require("./commands/delete");

// Route commands
if (command === "add") {
  addNote(args[1]);
}

else if (command === "list") {
  listNotes();
}

else if (command === "view") {
  viewNote(args[1]);
}

else if (command === "delete") {
  deleteNote(args[1]);
}

else {
  console.log("Unknown command");
}