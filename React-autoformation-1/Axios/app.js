axios.get('https://api.github.com/users/tba-adnan')
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });