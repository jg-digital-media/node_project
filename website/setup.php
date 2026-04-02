<?php require 'assets/template-parts/inc/header.php'; ?>

    <section class="page---title">

        <h2>Setup</h2>
        
    </section>

    <section class="section---devnotes--setup">

        <article>
            
            <h3>How to set up DevNotes CLI</h3>

        </article>

    </section>

    <section class="section---setup--one">

        <ul>

            <li>Make sure <strong>Node.js</strong> and <strong>npm</strong> are installed to your system.
            
               <!--  <br /><code>node -v</code>, <code>node --version</code>, <code>npm -v</code>, <code>npm --version</code>. -->
                <br />
            
                <header class="code-block__header">

                    <h3 class="code-block__title">Code Block: JavaScript function</h3>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>

                </header>

<pre><code class="language-bash code-block">node -v
node --version 
npm -v
npm --version
</code></pre>
                <div class="code-block__caption">Test caption 1</div>
               
            
                <br />You'll see something like <code>v20.11.1</code> in your terminal. If you need to, you can download it from the <a href="https://nodejs.org/en/download" target="_blank">Node.js website</a>.<br />
           
                <header class="code-block__header">

                    <h3 class="code-block__title">Code Block: JavaScript function</h3>
                    <!-- <a href="#" class="code-block__copy" type="button">Copy Code!</a> -->

                </header>
<pre><code class="language-bash">$ node -v
v20.11.1</code>
</pre>
            </li>

            <li>In your Command Line/Terminal, navigate to the directory where you want to create your project and run the intialisation command.

            <br /><br />
            
            <header class="code-block__header">

                    <h3 class="code-block__title">Initalise a new Node.js project</h3>
                    <a href="#" class="code-block__copy" type="button">Copy Code!</a>
                
            </header>

<pre><code class="language-bash">
npm init</code></pre>      
            </li>

            <li>If your setup process has not provided a "bin" field, add it to your package.json file (this is KEY for CLI tools). This is what tells Node.js "this file is a command" that you can run in the terminal.

            <br /><br />
            <header class="code-block__header">

                <h3 class="code-block__title">Code Block: JavaScript function</h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>
        <pre><code class="language-json">"bin": {
  "devnotes": "./index.js"
},</code></pre>
        <div class="code-block__caption">Caption 2</div>
        </li>
        <li>Create your entry file. <code>`touch index.js`</code>. 
    
    
            <header class="code-block__header">

                <h3 class="code-block__title">Create `index.js` in the project root.</h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>

            </header>
            <pre>
                
            <code class="language-node"> #!/usr/bin/env node</code>

            <!-- <code class="language-javascript">

            
                // Route commands
                if (command === "add") {
                addNote(args[1]);
                }

            </code> -->  
        </pre>

            <div class="code-block__caption"> This makes your entry file, index.js, executable as a CLI command</div>
    
    
        </li>

        <li>In your project directory, run: `npm link`. 
        <header class="code-block__header">

            <h3 class="code-block__title">Make it runnable globally</h3>
            <a href="#" class="code-block__copy" type="button">Copy Code!</a>
        </header>

             <pre> <code class="language-bash">npm link</code></pre>
             <div class="code-block__caption">Creates a global command called: "devnotes" by using the `bin` key in your package.json</div>
        </li>

        <li> 
<br />This creates a global command called: "devnotes". You'll know it has worked if you see this message or something like it<header class="code-block__header">

                <h3 class="code-block__title">Code Block: JavaScript function</h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>
            <pre><code class="language-text">added 1 package, and audited 3 packages in 3s<br /> 
found 0 vulnerabilities</code></pre>

            <div class="code-block__caption">Tells us the command has worked and is ready to be tested.</div>
            </li>

            <li><header class="code-block__header">

                <h3 class="code-block__title">Code Block: JavaScript function</h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>
            <pre><code class="language-bash">devnotes</code></pre>

            <div class="code-block__caption">Tells us the command has worked and is ready to be tested.</div>
            </li>

            <li>                    

                <p>Type `devnotes` in the terminal to test it. If you see no message, your command is working.</p>

            </li>      
            
            <li>This creates a global command called: "devnotes". You'll know it has worked if you see this message or something like it<header class="code-block__header">

                <h3 class="code-block__title"></h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>
            <pre><code class="language-bash"></code></pre>

            <div class="code-block__caption"><!-- To guard against errors with your JSON file. --></div></li>


            <li><header class="code-block__header">

                <h3 class="code-block__title"></h3>
                <a href="#" class="code-block__copy" type="button">Copy Code!</a>
            </header>
            <pre><code class="language-bash">SyntaxError: Unexpected end of JSON input</code></pre>

            <div class="code-block__caption"> SyntaxError: Unexpected end of JSON input</div></li>
        
<!--       -->

      
            

    <li>Either add a valid JSON file with an empty array or let your application create one for you with your first item/task.</li>



    <li>This is what worked for me<header class="code-block__header">

        <h3 class="code-block__title"></h3>
        <a href="#" class="code-block__copy" type="button">Copy Code!</a>
    </header>
    <pre><code class="language-json">
    [ 
        "devnote"
    ]

    // becomes 

    [ 
        "devnote"
    ]

    </code></pre>
    <div class="code-block__caption"><!-- This is what worked for me --></div></li>



<!--
<header class="code-block__header">

    <h3 class="code-block__title"></h3>
    <a href="#" class="code-block__copy" type="button">Copy Code!</a>
</header>
<pre><code class="language-bash"></code></pre>

<div class="code-block__caption"></div></li>


 <pre><code class="language-bash">
                node -v
                </code>
                </pre>

                <pre><code class="language-bash">
                node --version 
                </code>
                </pre>

                <pre><code class="language-bash">
                npm -v
                </code>
                </pre>

                <pre><code class="language-bash">
                npm --version
                </code>
                </pre> 

     -->

    </ul>

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