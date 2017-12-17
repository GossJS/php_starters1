app.get('/cgi-bin/script.cgi', async r=>{
       const execFile = require('util').promisify(require('child_process').execFile);
       const { stdout } = await execFile( `${__dirname}/script.cgi`);
       r.res.send(stdout);
     });
