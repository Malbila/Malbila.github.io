const form = document.getElementById('form')
const link = document.getElementById('developpement-article-liste')

form.innerHTML = '<form method="POST" action="http://localhost/le-bdci/php/newslatter/index.php"> <div class="form-group my-3"><label for=" nom">Votre nom et prenom <b>*</b></label> <input type="text" class="form-control" placeholder="Nom et Prenom" id="nom" name = "nom" required></div> <div class="form-group my-3"> <label for="mail">Email <b>*</b></label> <input type="email" class="form-control" placeholder="Votre adresse mail" id="mail" name = "mail" required> </div> <button type="submit" class="btn btn-primary mx-auto">Envoyez</button></form>'

String.prototype.sansAccent = function() {
    var accent = [
        /[\300-\306]/g, /[\340-\346]/g, // A, a
        /[\310-\313]/g, /[\350-\353]/g, // E, e
        /[\314-\317]/g, /[\354-\357]/g, // I, i
        /[\322-\330]/g, /[\362-\370]/g, // O, o
        /[\331-\334]/g, /[\371-\374]/g, // U, u
        /[\321]/g, /[\361]/g,   // N, n
        /[\307]/g, /[\347]/g,  // C, c
    ]

    var noaccent = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n', 'C', 'c']
    var str = this;
    for(var i = 0; i<accent.length; i++) {
        str = str.replace(accent[i], noaccent[i])
    }
    return str
}

function accessArticle(url) {
    url.toString()
    const lower = url.toLowerCase()
    const finalValue = lower.replace(/[ ']/g, '-')
    finalValue.sansAccent()
    console.log(finalValue.sansAccent());
    window.open(`../${finalValue.sansAccent()}`)
}

//accessArticle("Savoir entreprendre à partir de s'en")

