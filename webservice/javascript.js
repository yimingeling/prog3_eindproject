window.addEventListener('load', init);


let url = 'details.php'
let urlDetails

let games
let buttons
let close
let items = []
let detailsContainer

function init() {
    getGameData()
    games = document.getElementById('games')

    buttons = document.getElementsByTagName('button');
    games.addEventListener('click', detailsButtonHandler);
    close = document.getElementById('close')
    close.addEventListener('click', closeDetails)


}

function detailsButtonHandler(e) {
    e.preventDefault();
    let clickedButton = e.target;
    if(e.target.className === "details") {
        let game = clickedButton.parentElement;
        let gameId = game.id;
        let text = game.getElementsByTagName("h2")[0].innerHTML
        detailsContainer = document.getElementById('detailsContainer')


        detailsContainer.style.display = 'flex';
        let name = document.querySelector('#detailsContainer h2')
        name.innerHTML = text;
        urlDetails = 'details.php?id=' + gameId
        window.scrollTo(0, 0);
        getGameDetails()
    }
    if(e.target.className === "add"){

        let game = e.target.parentNode
        let gameId = game.id
        console.log(gameId)
        items.push(gameId);
        localStorage.setItem("all-favorites", JSON.stringify(items))
        changeBackground(gameId)
    }
    if(e.target.className === "remove"){

        let game = e.target.parentNode
        let gameId = game.id
        items = JSON.parse(localStorage.getItem("all-favorites"));
        let index  = items.indexOf(gameId);
        items.splice(index, 1);
        localStorage.setItem("all-favorites", JSON.stringify(items))
        removeBackground(gameId)
    }
}


function getGameData() {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error("404 Error fetching games");
            }
            return response.json();
        })
        .then(data => {
            console.log("titles: ");
            games = document.getElementById('games');
            data.forEach(game => {
                console.log(game.name);
                createGame(game);
            });
        })
        .catch(errorHandler)
}

function getGameDetails() {
    console.log(urlDetails)
    fetch(urlDetails)
        .then(response => {
            if (!response.ok) {
                throw new Error("404 Error fetching details");
            }
            return response.json();
        })
        .then(data => {
            fillDetailsContainer(data);
        })
        .catch(errorHandler)
}


function fillDetailsContainer(data) {
    detailsContainer = document.getElementById('detailsContainer');
    let summary = detailsContainer.getElementsByTagName('p')[0]
    summary.innerText = data.description
    let tag = detailsContainer.getElementsByTagName('p')[1]
    tag.innerText = data.tags.join(', ')
}




function createGame(game){
    const divElement = document.createElement("div");
    divElement.classList.add("game");
    divElement.id = game.id;
    divElement.dataset.id = game.id;

    const h2Element = document.createElement("h2");
    h2Element.innerText = game.name;

    const h3Element = document.createElement("h3");
    h3Element.innerText = game.developer;

    const imgElement = document.createElement("img");
    imgElement.src = `./img/${game.image}`;

    const addButton = document.createElement("button");
    addButton.classList.add("add");
    addButton.textContent = "Favorite";

    const removeButton = document.createElement("button");
    removeButton.classList.add("remove");
    removeButton.textContent = "Unfavorite";

    const detailsButton = document.createElement("button");
    detailsButton.classList.add("details");
    detailsButton.textContent = "Details";


    divElement.append(h2Element);
    divElement.append(h3Element);
    divElement.append(imgElement);
    divElement.append(addButton);
    divElement.append(removeButton);
    divElement.append(detailsButton);

    // Het toevoegen van het div-element aan de container
    games.append(divElement);
    checkStorage()
}



function closeDetails(){
    detailsContainer.style.display = 'none';
}
function checkStorage(){
    let stored = localStorage.getItem("all-favorites")
    if(stored){
        items = JSON.parse(stored)
    }
    for(let item of items){
        changeBackground(item)
    }
}

function changeBackground(item) {
    let allGames = document.querySelectorAll(".game")
    for (let i = 0; i < allGames.length; i++){
        if(item === allGames[i].dataset.id){
            allGames[i].classList.add("favorite")
        }
    }
}

function removeBackground(item){
    let gameItem = document.getElementById(item)
    gameItem.classList.remove("favorite")
}



function errorHandler(){
    alert("This game doesn't exist! :(");
}