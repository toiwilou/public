
var projetNonDispo = function(id) {
    var bouton = document.querySelector(id)
    bouton.addEventListener('click', function(){
    alert('Les projets ne sont pas disponibles pour le moment. Toutefois, vous pouvez voir de quels projets s\'agit-il.') 
    bouton.nextElementSibling.classList.add('visible')
    this.parentNode.removeChild(this)
})
}

projetNonDispo('#spoiler3 a')
