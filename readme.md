

# CLI Tool + Companion Website - `02-04-2026 - 17:21`

## Sections

 - ### [Task List](#task-list) | [Content](#content) | [Notes](#notes) | [Prompts](#prompts)

## Task List  

### Tasks `25` Completed `14` 

#### DevNotes CLI

+ `TODO:` `COMPLETED: 19-03-2026` Create a new local Node.js environment
+ `TODO:` `COMPLETED: 20-03-2026` Make entry file runnable globally `index.js` `devnotes`
+ `TODO:` `COMPLETED: 20-03-2026` Read command line input to take in a new task/note. `index.js`
+ `TODO:` `COMPLETED: 20-03-2026` Implement main commands
+ `TODO:` `COMPLETED: 20-03-2026` Simple solution for storing notes
+ `TODO:` `COMPLETED: 20-03-2026` Create helper functions `index.js`
+ `TODO:` `COMPLETED: 23-03-2026` Refactor code into clean modules `index.js`
+ `TODO:` Use timestamps or UUIDs for task ID's
+ `TODO:` Turn project into an installable npm CLI tool
+ `TODO:` Or add tags / categories / search functionality

#### Front End Website

+ `TODO:` Build a Companion Website to DevNotes CL
  + `TODO:` `COMPLETED: 01-04-2026` Wireframe front end website
  + `TODO:` `COMPLETED: 01-04-2026` Implement solution users copy commands on front 
  + `TODO:` `COMPLETED: 02-04-2026` Refine and build up main content from the `README.md`
  + `TODO:` `COMPLETED: 02-04-2026` Remove filenames from pages
  + `TODO:` `COMPLETED: 02-04-2026` Implement "Install via NPM" and view source 
  + `TODO:` `COMPLETED: 02-04-2026` Look at styles for `code-block-description p` 
  + `TODO:` `COMPLETED: 02-04-2026` Modify styles command-line-code selector - `build-log.php` selector. `code.php``index.php`end website
  + `TODO:` Choose font stack
  + `TODO:` Clean up Sass code and the main stylesheet
  + `TODO:` Uncaught TypeError: - fix when not on homepage - copy command `index.php`
  + `TODO:` Add projects.php page
  + `TODO:` Add a "Learn Node" section to the front end website
  + `TODO:` Add to portfolio
  + `TODO:` Publish to web and create repository

[Back to Top](#)


## Content

### An ongoing content plan for the front-end website for this project

#### `Home` Index Page
  
Welcome to DevNotes CLI - `heading l2`

  + What the CLI does `heading l3`

    ``` 
    DevNotes-CLI (v1.0.3) is a CLI tool that:

        Reads command-line input

        Stores notes in a file (JSON for now)

        Lets you add/list/view/delete notes
    ```

    ```All from your command line or terminal
    ```

  + Why I built it `heading l3`

    + It's been some time since I looked at a node.js project and I've needed to improve my confidence with the technology for some time. Experiences with Package Managers and front end servers have put me off in the past. And I've been out of practice for a while now.

    + When I was researching suitable projects to try, this one seemed to fit the bill.
 
  + Who it's for `heading l3`

    + This website will hopefully empower people in a similar position to me, to get started with Node and get started right away, inspiring them to build their own projects.

#### `Commands` Page

##### Project Root Management

  + `npm -v` `npm --version` - Check npm version - The first thing to do is check your system has the latest version of node installed.

  + `node -v` `node --version` - Check node version

  + `npm init` - package name: (node_project) `devnote-cli`
    
      + Navigate to your project root and run `npm init` to begin the process of creating a new package. This will create a `package.json` file.

        + description: A simple developer-focused notes tool you run in your terminal.
        + entry point (index.js - index.php)
        + test command: test
        + git repository: https://https://github.com/jg-digital-media/projects
        + keywords: commandline devnotes notes cli lists tasks
        + author: jg@digitalMedia
        + license: (ISC) MIT

      <!-- + /Sorry, name can only contain URL-friendly characters and name can no longer contain capital letters./-->

  + `npm install`- Installs the package dependencies to a new location by checking your package.json file.

  + `package.json`  
      
      + ```

            {
            "name": "devnote-cli",
            "version": "1.0.0",
            "description": "A simple developer-focused notes tool you run in your terminal.",
            "main": "index.js",
            "scripts": {
                "test": "test"
            },
            "repository": {
                "type": "git",
                "url": "https://https://github.com/jg-digital-media/projects"
            },
            "keywords": [
                "commandline",
                "devnotes",
                "notes",
                "cli",
                "lists",
                "tasks"
            ],
            "author": "jg@digitalMedia",
            "license": "MIT"
            }

        ```  

  + `touch index.js` - To create the entry point for the application.

  + `npm link` - Creates a global command called: devnotes by using the `bin` key in your package.json

    ```text    
        added 1 package, and audited 3 packages in 3s

        found 0 vulnerabilities
    ```

    + This tells us the command has worked and is ready to be tested.  

    + Type `devnotes` in the terminal to test it. If you see "Unknown command", it meansyour command is working.

##### App Commands

+ `devnotes add "first task"` - adds a new task to the list

+ `devnotes list` - lists all tasks

+ `devnotes view 1` - lists a specific task

+ `devnotes delete 1` - deletes a specific task

#### `Demo` Page

Important code snippets for the Node Project

#### `Code` Page

Code snippets you can use to build up the project for yourself.

##### 'Shebang' Line for Cross platform compatibility

```javascript

// This is known as 'Shebang' Line for Cross platform compatibility. It tells your system it can run Node.js - allowing it to be run as CLI command.
#!/usr/bin/env node
```

##### Read command line input `index.js`

```javascript

// Read command line input, ready to accept commands. Prints the input to the console/terminal. 
const args = process.argv.slice(2);

console.log(args);
```

##### Parse Commands - Skeleton Application Logic `index.js`

```javascript

// read command line input to accept a new task/note
const args = process.argv.slice(2);

// parse commands - application logic
const command = args[0];

if (command === "add") {
  console.log("Adding note:", args[1]);
}

if (command === "list") {
  console.log("Listing notes");
}

if (command === "view") {
  console.log("Viewing note:", args[1]);
}

if (command === "delete") {
  console.log("Deleting note:", args[1]);
}

```

With this code, you have a skeleton of an application that can accept commands and can be navigated. You key in commands via `devnotes` to the terminal and you receive a response.

##### Helper functions and application logic

Helper functions are functions that when called perform important actions e.g. loading and saving notes.

+ `loadNotes()` - loads note data from a JSON file
```javascript

// helper function - load notes
function loadNotes() {

  if (!fs.existsSync(filePath)) return [];

  const data = fs.readFileSync(filePath, "utf-8");

  return JSON.parse(data);
}
```

+ `saveNotes()` - loads save data to a JSON file.
```javascript

// helper function - save notes
function saveNotes(notes) {

  fs.writeFileSync(filePath, JSON.stringify(notes, null, 2));
}
```


##### Application Logic and Code

+ `devnotes add <id> (integer)` Run the function to add a new note to the list.

```javascript

if (command === "add") {

    // access the note list
    const notes = loadNotes();

    // create an object to store the new note
    const newNote = {
        id: notes.length + 1,
        text: args[1]
    };

    // add and save the new note
    notes.push(newNote);
    saveNotes(notes);

    // confirm the note has been added to terminal
    console.log("Note added!");

    // console.log("Adding note:", args[1]);
}
```

Example - Code to add a new note to the list via JSON.
```bash
  devnotes add "create node module"
  undefined:1
```


+ `devnotes add "create node module"`


```json

[
  "devnote",
  {
    "id": 2,
    "text": "create node module"
  }

]
```

Now we have a stored note in a JSON file. 


fix it further with a more valid array structure

`[]` is all you need. *Recreate the error*


+ `devnotes list` - run the function that returns a numbered list of all tasks

```javascript


if (command === "list") {

    const notes = loadNotes();

    notes.forEach(note => {
        console.log(`${note.id}: ${note.text}`);
    });


    // console.log("Listing notes");
}

```

+ `devnotes view <id> (integer)` - Run the function that lists a specific task with the given integer id

```javascript

if (command === "view") {

    const notes = loadNotes();
    const id = parseInt(args[1]);

    const note = notes.find(n => n.id === id);

    if (!note) {

        console.log("Note not found");
    } else {

        console.log(note.text);
    }

}

```

+ `devnotes delete <id> (integer)` - deletes a specific task with the given integer id

```javascript

if (command === "delete") {

    let notes = loadNotes();
    const id = parseInt(args[1]);

    notes = notes.filter(n => n.id !== id);

    saveNotes(notes);

    console.log("Note deleted");
}

```

##### Node Modules

Node modules are packages of code that you can use in your project. It's code that you can export and reuse. You can use them to organise your code, making it easier to manage. 

There are 2 types of modules in Node.js: built-in and external. Built-in modules are included with Node.js. External modules are modules that you install from the npm registry.

  + utils/file.js
 
  ```javascript

    // open the file system
    const fs = require("fs");
    const path = require("path");

    const filePath = path.join(__dirname, "notes.json");


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
```

+ At the top of your index.js file, import the file.js module

```javascript

    const { loadNotes, saveNotes } = require("./utils/file");
```

+ You should then modify the pathway to your notes.json file if you want it to stay in your project root.

```javascript

const filePath = path.join(__dirname, "../notes.json");
```

#### `Setup` Page

##### How to set up DevNotes CLI `heading l2`

  + Make sure Node.js and npm are installed to your system.  `node -v` `node --version` `npm -v` `npm --version`

  + You'll see something like <code>v20.11.1</code> in your terminal. If you need to, you can download it from the <a href="https://nodejs.org/en/download" target="_blank">Node.js website</a>.<br />

  + In your Command Line/Terminal, navigate to the directory where you want to create your project and run the initialisation command. `npm init`

  + If your setup process has not provided a "bin" field, add it to your package.json file. Add a "bin" field (this is KEY for CLI tools). This is what tells Node.js "this file is a command" that you can run in the terminal.

  + Create your entry file

    + Create `index.js` in the project root.

    + At the very top, add this line:

        ```javascript

        #!/usr/bin/env node
        ```
    This makes your entry file, index.js, executable as a CLI command.

  + Make it runnable globally

    + In your project directory, run: `npm link`

      This creates a global command called: "devnotes". You'll know it has worked if you see this message or something like it:
    
      ```
        added 1 package, and audited 3 packages in 3s

        found 0 vulnerabilities
      ```

  + To guard against errors with your JSON file

    + e.g. 

    ```bash
    SyntaxError: Unexpected end of JSON input

    ```
  + Either add a valid JSON file with an empty array or let your application create one for you with your first item/task.

  + This is what worked for me: 

    ```json
    [ 
        "devnote"
    ]
    ```


#### `Build Log` Page

  + `v` `1.0.0` - `19-03-2026` - Created the project, identidying `node_project` as the project root and creating the space for design the front-end website.

  + `v` `1.0.1` - `19-03-2026` - Initiated the package manager with `npm init`.

  + `v` `1.0.2` - `20-03-2026` - 
  
    + Added `index.js` to the project root and added a comment to the top of the file to tell node it can be run as an executable CLI command.

    + Implemented application logic - where commands are parsed, run and a response is given

    + Application actions are implemented. New Tasks added to the JSON file.  The entire list can now be loaded. Single notes can be retried, viewed and deleted.

    + Development began on the companion Front End Website.

#### `Other Projects` Page ??

  + https://github.com/jg-digital-media/projects/node_project - `A link to the project repository`

  + https://github.com/jg-digital-media/projects

[Back to Top](#)


## Notes
[Back to Top](#)

### Published

Nice. I managed to publish DevNotes CLI to NPM with `npm publish`.  This is done via https://www.npmjs.com with a security key and 2 factor authentication set up.

### To Build a CLI Tool - DevNotes CLI

Concept: 

+ Build: **DevNotes CLI**
+ Stack: Node.js (+ Commander.js?)
+ Site: document the journey + demo it visually

### Common Node.js Commands

``` 
    ----- Check Node version

    `node -v`	- 	Check node version
    `npm -v`	-	Check npm version

    ----- Creating Node Projects

    `mkdir my-project-name`
    `cd my-project-name`
    `npm init`
    `npm init -y` (skips install questions)

    `touch index.js` - creates an index file

    `node index.js` - run node project

    ----- Installing dependencies

    `npm install`

    `npm install <package-name>` 

    `npm install <package-name> --save-dev`

    `npm install <package-name>@latest` - force latest changes


    ----- Updating dependencies

    `npm update` - Update packages (based on version ranges in package.json)

    `npm outdated` - Check outdated packages

    `npm update <package-name>` - Update a specific package

    -----🚀 Running scripts

    Run a script (like dev, build, start)

    + `npm run dev`
    + `npm run build`
    + `npm start`

    ----- 🧹 Cleaning & reinstalling 

    Remove node_modules + reinstall (fix weird issues)

    + `rm -rf node_modules package-lock.json`
    + `npm install`

    ----- Node Version Management

    `nvm install node` - Install latest Node

    `nvm install 20` - Install specific version

    `nvm use 20` - Switch Node version

    `nvm alias default 20` - Set default version

    `nvm list` - List installed versions

```

###  Clear Plan:

#### `"devnotes": "./index.js"` in the package manager (package.json) is what makes devnotes a command in the CLI/Terminal

#### `npm link` creates a global command - Making it possible to use `devnotes` in the terminal and navigate the app.

### Adding notes

```devnotes add "first task"``` - enclose in quotes to add spaces and multiple words as a string.

### Json file handling.  

Notes are saved in a JSON file. `notes.json`. Empty lists are represented in JSON as `[]`.  If there is no file, the list is treated as empty and a notes.json file is created with the first added note.  "devnotes" key is not needed.

[
  "devnote"
]

### Run helper functions and implement application logic

### Divide into node modules for better code organization

##### Check for errors with modules and export code

e.g. 
```
ReferenceError: loadNotes is not defined
    at Object.<anonymous> (C:\xampp\htdocs\projects\node_project\index.js:13:17)
    at Module._compile (node:internal/modules/cjs/loader:1376:14)
    at Module._extensions..js (node:internal/modules/cjs/loader:1435:10)
    at Module.load (node:internal/modules/cjs/loader:1207:32)
    at Module._load (node:internal/modules/cjs/loader:1023:12)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:135:12)
    at node:internal/main/run_main_module:28:49

Node.js v20.11.1
```


## Prompts

[Back to Top](#)

### 🟢 Step 1: Pick a CLI Tool with a clear purpose

<!-- Node - 

That’s actually a really smart combo, Jonnie — you get backend + something visible for your portfolio 👌

Let’s shape this into something solid but still beginner-friendly.

--- -->

The goal is to build something:

* small enough to finish
* useful enough to talk about
* easy to demo on a website

Here are a few *good fits*:

#### 1. Dev Helper CLI 

A tool that speeds up common dev tasks.

**Example commands:**

```
devtool new component Button
devtool new page Home
devtool snippet fetch
```

**What it teaches:**

* File system (`fs`)
* Automating workflows
* Real-world usefulness

---

#### 2. Notes CLI (simple but expandable)

```
notes add "Learn Node"
notes list
notes delete 2
```

**You can later add:**

* tags
* search
* markdown support

---

#### 3. Project Generator CLI (portfolio gold)

```
create-app my-project
```

It could:

* generate folder structure
* add starter files
* maybe include HTML/CSS boilerplate

**This one looks impressive on a CV** 💼

---

### 🟡 Step 2: Build the CLI (core stack)

You’ll likely use:

* Node.js
* Commander.js → handles commands
* Inquirer.js → for user input

---

### 🔵 Step 3: Companion Website Idea

This is where you shine as a frontend dev.

Think of it as:
👉 **“Build in public + documentation + showcase”**

---

### 💡 What your website could include

### 1. Project Overview

* What the CLI does
* Why you built it
* Who it's for

---

### 2. Interactive Demo (this is 🔥 for portfolios)

Even though it’s a CLI, you can fake or simulate it in the browser.

Options:

* “Fake terminal” UI (super cool visually)
* Buttons that run commands and show output

---

### 3. Build Log / Dev Journal

Break it into stages:

* “Setting up Node.js”
* “Creating my first command”
* “Handling user input”
* “Working with files”

This shows your thinking process (employers LOVE this).

---

### 4. Code Snippets

Explain things like:

* How you used `fs`
* How commands work
* How input is handled

---

### 5. Installation Guide

```
npm install -g your-cli-tool
```

---

### 🟣 How the CLI + Website connect

This is where it gets really nice:

### Option A (simple):

* Website = documentation only

### Option B (better):

* Website shows example outputs
* Maybe even lets users copy commands

### Option C (advanced later):

* Website calls an API version of your CLI logic

---

### 🔥 Bonus Idea (this makes it stand out)

Add a feature where your CLI:

👉 generates something that your website can display

Example:

* CLI creates JSON data
* Website reads and visualises it

---

### 🧠 Suggested stack for your site

Since you're frontend-focused:

* Next.js or plain React
* Simple CSS or Tailwind
* Maybe a blog section

---

### 🚀 Simple roadmap (don’t overthink this)

1. Build 1–2 CLI commands only
2. Make them work well
3. Create a simple website explaining them
4. Add polish later

---

### 👍 If you want help next

I can:

* Help you pick *one exact idea* and lock it in
* Walk you through your first CLI command step-by-step
* Or design the structure of your website (like a mini case study)

Just tell me what direction feels most interesting and we’ll build it together.


### Idea - DevNotes CLI  - A notes app for your Terminal

Alright Jonnie — let’s lock this in cleanly so you don’t overthink it 👇

---



### 🔒 Final Idea: **“DevNotes CLI”**

A simple developer-focused notes tool you run in the terminal.

---

### 🧩 Core Concept

A CLI where you can quickly save and retrieve dev notes, snippets, or ideas without leaving the terminal.

Think:
👉 “Google Keep / Notes app, but for developers in the terminal”

---

### ⚙️ Core Commands (keep it SMALL)

Start with just these:

```bash
devnotes add "How to center a div"
devnotes list
devnotes view 1
devnotes delete 1
```

That’s it. Seriously — don’t add more yet.

---

### 🧠 What it teaches you

* File system (`fs`) → storing notes in JSON
* CLI structure → using Commander.js
* User prompts → via Inquirer.js
* Basic data handling (IDs, arrays, etc.)

---

### 🌐 Your Companion Website (this is the hook)

#### 💡 Theme:

👉 “How I built a developer CLI tool from scratch”

---

### 🔥 What makes this idea strong

### 1. Easy to build

No APIs, no auth, no complexity.

### 2. Easy to explain

Employers instantly understand it.

### 3. Easy to demo on a site

You can show:

#### 🖥 Fake terminal UI

```
> devnotes add "Flexbox trick"
✔ Note saved!

> devnotes list
1. Flexbox trick
2. Node tips
```

---

### 4. Natural content for your website

You’ll automatically have sections like:

* “Setting up my first Node.js CLI”
* “Handling user input”
* “Saving data to a file”
* “Structuring commands”

---

#### 🚀 Future upgrades (only AFTER v1)

* Tags:

  ```bash
  devnotes add "Flexbox" --tag css
  ```

* Search:

  ```bash
  devnotes search flex
  ```

* Markdown support

* Sync with a backend later (if you want)

---

[Back to Top](#)