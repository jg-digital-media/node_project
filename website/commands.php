<?php require 'assets/template-parts/inc/header.php'; ?>

<section class="page---title">

    <h2>Commands</h2>
        
</section>


<section class="section---devnotes--commands">


    <article>

        <h3>Project Management Commands</h3>

        <div>

            <ul>
                <li> <code class="command-line-code">npm -v</code>, <code class="command-line-code">npm --version</code></br > Check npm version - The first thing to do is check your system has the latest version of node installed.

                <header class="code-block__header">

                    <h4 class="code-block__title">Check for node and npm</h4>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

<pre><code class="language-bash code-block">
    node -v
    node --version 
    npm -v
    npm --version
</code>
</pre>
<div class="code-block__caption">Test caption 1</div>
                </li>

                <li> <code class="command-line-code">npm init</code></br> package name: (node_project) devnote-cli.  Navigate to your project root and run npm init to begin the process of creating a new package. This will create a <code class="command-line-code">package.json</code> file.</li>
            
                <header class="code-block__header">
                 <h4 class="code-block__title">Step by step npmn initiation in CLI</h4>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

                <pre><code class="language-text code-block">
description: A simple developer-focused notes tool you run in your terminal.
entry point (index.js - index.php)
test command: test
git repository: https://https://github.com/jg-digital-media/projects
keywords: commandline devnotes notes cli lists tasks
author: jg@digitalMedia
license: (ISC) MIT
npm install- Installs the package dependencies to a new location by checking your package.json file.
                </code></pre>   
                
                <div class="code-block__caption">Test caption 1</div>         
            
                </li>

                <li>package.json



               <header class="code-block__header">

                    <h4 class="code-block__title">Example JSON file</h4>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

<pre><code class="language-json code-block">{
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
} </code></pre>
                </li>
                <li><code class="command-line-code">touch index.js</code> - To create the entry point for the application.</li>


                <li><code class="command-line-code">npm link</code> - Creates a global command called: devnotes by using the bin key in your package.json
<header class="code-block__header">

                    <h4 class="code-block__title">Example JSON file</h4>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

<pre>
                    <code class="language-text code-block">
    added 1 package, and audited 3 packages in 3s
    found 0 vulnerabilities
                    </code>
</pre>
                    
                     <div class="code-block__caption">This tells us the command has worked and is ready to be tested.</div>
                </li>

                <li>Type <code class="command-line-code">devnotes</code> in the terminal to test it. <!-- If you see no message -->If you see "Unknown command", it means your command is working.</li>

            </ul>

        </div>

    </article>

    <article>

        <h3>App Commands</h3>

        <div>

            <p>These commands are used to manage the app.</p>

            <ul>

                <li><code class="command-line-code">devnotes add "first task"</code> - adds a new task to the list</li>

                <li><code class="command-line-code">devnotes list</code> - lists all tasks</li>

                <li><code class="command-line-code">devnotes view 1</code> - lists a specific task</li>

                <li><code class="command-line-code">devnotes delete 1</code> - deletes a specific task</li>

            </ul>

            <!-- <ul>
                <li><code>npm run start</code> - Starts the app.</li>
                <li><code>npm run build</code> - Builds the app.</li>
            </ul> -->

        </div>

        <!-- TODO: Button Download Node.js - https://nodejs.org/en/download/ -->
        <!-- TODO: Button visit repo -->

    </article>
    
</section>



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