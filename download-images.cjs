const fs = require('fs');
const path = require('path');
const https = require('https');

const images = [
  'Frame-15.png',
  'Frame-18.png',
  'Frame-19.png',
  'Frame-45.png',
  'Frame-46.png',
  'Frame-47-1-1.png',
  'hilton-garden-inn.png',
  'Ginger-hotel.png',
  'vivantahotel.png',
  'treat-resort.png',
  'amrit-cement.png',
  'blue-sky.png',
  'vidyamandir-skill-center.png',
  'om-hospitall.png',
  'grand-marina-hospital.png',
  'k7-school.png',
  'svasti.png',
  'dalmia.png'
];

const destDir = path.join(__dirname, 'public', 'images');

function download(file) {
  return new Promise((resolve) => {
    const dest = path.join(destDir, file);
    if (fs.existsSync(dest) && fs.statSync(dest).size > 1000) {
      console.log('Exists:', file);
      return resolve();
    }
    const url = `https://sunrisepmc.in/wp-content/uploads/2026/02/${file}`;
    const fileStream = fs.createWriteStream(dest);

    const req = https.get(url, {
      headers: {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
        'Accept': 'image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
        'Referer': 'https://sunrisepmc.in/projects/',
        'Accept-Language': 'en-US,en;q=0.9'
      }
    }, (res) => {
      if (res.statusCode === 200) {
        res.pipe(fileStream);
        fileStream.on('finish', () => {
          fileStream.close();
          console.log('Downloaded:', file, fs.statSync(dest).size);
          resolve();
        });
      } else {
        console.error('HTTP', res.statusCode, 'for', file);
        fileStream.close();
        if (fs.existsSync(dest)) fs.unlinkSync(dest);
        resolve();
      }
    });

    req.on('error', (err) => {
      console.error('Error', file, err.message);
      if (fs.existsSync(dest)) fs.unlinkSync(dest);
      resolve();
    });
  });
}

(async () => {
  for (const img of images) {
    await download(img);
  }
  console.log('Completed all download checks.');
})();
