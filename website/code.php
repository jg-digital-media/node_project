<?php require 'assets/template-parts/inc/header.php'; ?>


<section class="page---title">

    <h2>Code</h2>     
        
</section>

<section class="section---devnotes--code">

    <article class="code-snippet">

        <h3>Code snippets you can use to build up the project for yourself.</h3>
    
    </article>

</section>

<section class="section---devnotes--code">

    <div class="code---block--container">

        <article class="code-block">

            <header class="code-block__header">

                <h4 class="code-block__title">JavaScript</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>

            <div class="code-block__code">
                <pre>

<code class="language-javascript">#!/usr/bin/env node</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">

            <p>This is known as 'Shebang' Line for Cross platform compatibility. It tells your system it can run Node.js - allowing it to be run as CLI command.</p>

        </article>               
                   
    </div>

    <div class="code---block--container">

        <article class="code-block">

            <header class="code-block__header">

                <h4 class="code-block__title">JavaScript</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>

            <div class="code-block__code">
                <pre>
                    <code class="language-javascript">    
// read command line input to accept a new task/note
const args = process.argv.slice(2);

console.log(args);
                    </code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">

            <p>Read command line input, ready to accept commands.  Prints the input to the console/terminal.</p>

        </article>               
                
    </div>

        <!--  
    <div class="code---block--container">

        <article class="code-block">

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>

            <div class="code-block__code">
                <pre>

<code class="language-javascript"> . . .</code>
                </pre>
            </div>
        </article>
    </div>
        -->

    <div class="code---block--container">

        <article class="code-block">
    
            <header class="code-block__header">

                <h4 class="code-block__title">Parse Commands - Skeleton Application Logic</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>

            <div class="code-block__code">
                <pre>

<code class="language-javascript"> 

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
</code>
                </pre>
            </div>
        </article>
              
        <article class="code-block-description">

            <p>With this code, you have a skeleton of an application that can accept commands and can be navigated. You key in commands via `devnotes` to the terminal and you receive a response.</p>

        </article>

    </div>
                

    <div class="code---block--container">

        <article class="code-block">

                <header class="code-block__header">

                    <h4 class="code-block__title">Helper functions</h4>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

                <div class="code-block__code">
                    <pre>

<code class="language-javascript">

// helper function - load notes
function loadNotes() {

    if (!fs.existsSync(filePath)) return [];

    const data = fs.readFileSync(filePath, "utf-8");

    return JSON.parse(data);
}

</code>
                    </pre>
                </div>
            </article>

            <article class="code-block-description">
                
                <p>Helper functions are functions that when called perform important actions e.g. loading and saving notes. - + `loadNotes()` - loads note data from a JSON file</p>

            </article>
        </div>

         
    <div class="code---block--container">

        <article class="code-block">

            <header class="code-block__header">

                <h4 class="code-block__title">Helper functions saveNotes()</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>

            <div class="code-block__code">
                <pre>

<code class="language-javascript"> 

// helper function - save notes
function saveNotes(notes) {

fs.writeFileSync(filePath, JSON.stringify(notes, null, 2));
}

`saveNotes()` - loads save data to a JSON file.</code>
                </pre>
            </div>
        </article>

    <article class="code-block-description">
        <p>`saveNotes()` - loads save data to a JSON file.</p>
    </article>
</div>

<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title">Application Logic and Code</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-javascript"> if (command === "add") {

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
</code>
                </pre>
            </div>

        </article>

        <!-- <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title">Example</h4>
                <a href="#" class="code-block__copy" type="button"> Copy Code! </a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-javascript">   
    devnotes add "create node module"
  undefined:1
</code>
                </pre>
            </div>

        </article>
--> 
        <article class="code-block-description">
            <p>Code to add a new note to the list via JSON.</p>
        </article> 
</div>
           
    <!--  ##### 

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

        Example
        ```bash
        devnotes add "create node module"
        undefined:1
        ```
-->

<!--

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
    -->


    <div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title">Add new note to list</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

            <div class="code-block__code"><pre><code class="language-javascript">
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

</code></pre>
        </div>

        </article>

        <article class="code-block-description">
            <p>`devnotes add <id> (integer)` Run the function to add a new note to the list</p>
        </article>
    </div>

    <div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title">Example - Code to add a new note to the list via JSON.</h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-json"> [
  "devnote",
  {
    "id": 2,
    "text": "create node module"
  }

]</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">
            <p>devnotes add "create node module" </p>
        </article>
</div>

<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code"><pre><code class="language-javascript">

if (command === "list") {

    const notes = loadNotes();

    notes.forEach(note => {
        console.log(`${note.id}: ${note.text}`);
    }); 

    // console.log("Listing notes");
}</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">
            <p> run the function that returns a numbered list of all tasks </p>
        </article>
</div>
<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-javascript">if (command === "view") {

    const notes = loadNotes();
    const id = parseInt(args[1]);

    const note = notes.find(n => n.id === id);

    if (!note) {

        console.log("Note not found");
    } else {

        console.log(note.text);
    }

}
</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">
            <p> `devnotes view <id> (integer)` - Run the function that lists a specific task with the given integer id</p>
        </article>
</div>
<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre><code class="language-javascript"> 
if (command === "delete") {

    let notes = loadNotes();
    const id = parseInt(args[1]);

    notes = notes.filter(n => n.id !== id);

    saveNotes(notes);

    console.log("Note deleted");
}</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">
            <p>`devnotes delete <id> (integer)` - deletes a specific task with the given integer id</p>
        </article>
</div>




<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>
<code class="language-javascript"> 
    // open the file system
    const fs = require("fs");
    const path = require("path");

    const filePath = path.join(__dirname, "notes.json");
</code>
                </pre>
            </div>

        </article>

        <article class="code-block-description">

            <p>Node modules are packages of code that you can use in your project. It's code that you can export and reuse. You can use them to organise your code, making it easier to manage. </p>

        </article>

</div>

<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>
<code class="language-javascript">
// helper function - load notes
function loadNotes() {

    if (!fs.existsSync(filePath)) return [];

    const data = fs.readFileSync(filePath, "utf-8");

    return JSON.parse(data);
}</code></pre>
            </div>

        </article>

        <article class="code-block-description">
            <p>. . .</p>
        </article>
</div>
<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre><code class="language-javascript">// open the file system
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
};</code></pre>
</div>

        </article>

        <article class="code-block-description">
            <p><br />

            There are 2 types of modules in Node.js: built-in and external. Built-in modules are included with Node.js. External modules are modules that you install from the npm registry.
        </p>
        </article>
</div>


<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-javascript">const { loadNotes, saveNotes } = require("./utils/file"); </code></pre>
            </div>

        </article>

        <article class="code-block-description">
            <p>At the top of your index.js file, import the file.js module</p>
        </article>
</div>

<div class="code---block--container">

        <article class="code-block"> 

            <header class="code-block__header">

                <h4 class="code-block__title"></h4>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>

             <div class="code-block__code">
                <pre>

<code class="language-javascript">const filePath = path.join(__dirname, "../notes.json");</code></pre>
            </div>

        </article>

        <article class="code-block-description">
            <p>You should then modify the pathway to your notes.json file if you want it to stay in your project root.</p>
        </article>
</div>

</section>

<!-- <p><a href="index.php">Home</a></p> -->

    <script type="text/javascript">

        document.addEventListener('click', (e) => {

            // Copy code from code blocks to clipboard
            if (!e.target.matches('.code-block__copy')) return;
            e.preventDefault();

            const block = e.target.closest('.code-block');
            let codeEl = block ? block.querySelector('code') : null;
            if (!codeEl) {
                const header = e.target.closest('.code-block__header');
                const pre = header && header.nextElementSibling;
                if (pre && pre.tagName === 'PRE') {
                    codeEl = pre.querySelector('code');
                }
            }
            if (!codeEl) return;

            navigator.clipboard.writeText(codeEl.innerText);

            e.target.textContent = 'Copied!';

            setTimeout(() => {

                e.target.textContent = 'Copy Code!';
            }, 2100);

        });

    </script>

<?php require 'assets/template-parts/inc/footer.php'; ?>