console.log('connected! - app.js - 02-04-2026 - 13:12');

const installButton = document.getElementById('js---installnpm');

//const sourceButton = document.getElementById('js---viewsource');

// install via npm with by copying command to clipboard
installButton.addEventListener('click', (e) => {
    
    e.preventDefault();
    navigator.clipboard.writeText('npm install -g devnotes-cli');
    document.getElementById('command_copied').style.opacity = 1;
    setTimeout(() => {
        document.getElementById('command_copied').style.opacity = 0;
    }, 2900);
});


