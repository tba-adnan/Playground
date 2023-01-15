const fs = require('fs');
//
try {
  const data = fs.readFileSync('fsync-write.txt', 'utf8');
  console.log(data);
} catch (err) {
  console.error("> file now found!");
}