const display = document.getElementById('article')
// display.addEventListener('click', loadArticle())

function loadArticle() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("article").innerHTML = this.responseText;
    }
    xhttp.open("GET", "http://localhost:3000/api/article");
    xhttp.send();
  }

  const dat = async (e) => {
    e.preventDefault()
    let data
    try {
      data = await fetch("http://localhost:3000/api/article")
      console.log(data.json())
      //return data
    }
    catch {
      (err) => console.log(err);
    }
  }
const play = dat(event)
display.innerHTML = play