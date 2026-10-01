const http = require('http');
const fs = require('fs');
const path = require('path');
const root = process.cwd();
const mime = {'.html':'text/html; charset=utf-8','.jpg':'image/jpeg','.jpeg':'image/jpeg','.png':'image/png','.css':'text/css'};
http.createServer((req, res) => {
  let pathname = decodeURIComponent((req.url || '/').split('?')[0]);
  if (pathname === '/') pathname = '/homepage-preview.html';
  const file = path.join(root, pathname.replace(/^\/+/, ''));
  fs.readFile(file, (error, data) => {
    if (error) { res.statusCode = 404; res.end('Not Found'); return; }
    res.setHeader('Content-Type', mime[path.extname(file).toLowerCase()] || 'application/octet-stream');
    res.end(data);
  });
}).listen(8787, '127.0.0.1');
