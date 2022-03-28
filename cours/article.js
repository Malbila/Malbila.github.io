function loadArticle() {
    const req = new XMLHttpRequest();
    req.open("GET", "http://localhost:3000/api/article");
    req.send();
    req.onload = function() {
      const data = JSON.parse(req.response)
      document.getElementById("article").innerHTML = data.map(item => (`<img src=${item.imageUrl} />`))
    }
  }
 
  const displayArticles = document.getElementById('articles')
  displayArticles.innerHTML = loadArticle()