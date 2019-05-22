const request = require('request');

const options = {
  url: 'https://api.twitch.tv/helix/games/top',
  headers: {
    'Client-ID': 'v7haqdcnyhs4saarthujs94qw1z8dx',
  },
};
function callback(error, response, body) {
  if (!error && response.statusCode === 200) {
    const info = JSON.parse(body);
    const flat = info.data;
    for (let i = 0; i < flat.length; i += 1) {
      console.log(flat[i].id, flat[i].name);
    }
  }
}
request(options, callback);
