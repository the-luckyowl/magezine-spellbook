window.addEventListener('load', init);



const cardsContainer = document.querySelector("#cards");
const spells = [
    {name: "druidcraft", image: "./includes/images/cat2.jpg", school:"transmutation", description:"Whispering to the spirits of nature, you create one of the following effects within range:\n" +
            "You create a tiny, harmless sensory effect that predicts what the weather will be at your location for the next 24 hours. The effect might manifest as a golden orb for clear skies, a cloud for rain, falling snowflakes for snow, and so on. This effect persists for 1 round.\n" +
            "You instantly make a flower blossom, a seed pod open, or a leaf bud bloom.\n" +
            "You create an instantaneous, harmless sensory effect, such as falling leaves, a puff of wind, the sound of a small animal, or the faint odor of skunk. The effect must fit in a 5-foot cube.\n" +
            "You instantly light or snuff out a candle, a torch, or a small campfire."},
    {name: "acid splash", image: "./includes/images/cat2.jpg", school:"conjuration",description:"this is druidcraft"},
    {name: "chill touch", image: "./includes/images/cat2.jpg", school:"necromancy",description:"this is druidcraft"},
    {name: "dancing lights", image: "./includes/images/cat2.jpg", school:"evocation",description:"this is druidcraft"},
    {name: "eldritch blast", image: "./includes/images/cat2.jpg", school:"evocation",description:"this is druidcraft"}

];
function newCard(spellImage,spellName,spellSchool,description){
    const cardDiv = document.createElement("div");
    cardDiv.classList.add("card");
    cardsContainer.appendChild(cardDiv);

    const img = document.createElement("img");
    img.src = spellImage;
    cardDiv.appendChild(img);

    const nameDiv = document.createElement("div");
    nameDiv.innerHTML = spellName;
    nameDiv.classList.add("nameText");
    cardDiv.appendChild(nameDiv);

    const schoolDiv = document.createElement("div");
    schoolDiv.innerHTML = spellSchool;
    schoolDiv.classList.add("nameText");
    cardDiv.appendChild(schoolDiv);

    const buttoncontainer = document.createElement("div")
    buttoncontainer.id = "buttoncontainer"
    cardDiv.appendChild(buttoncontainer);

    const details = document.createElement("div");
    details.classList.add("details");
    details.innerHTML = "show details";
    details.addEventListener('click',clickHandler);
    buttoncontainer.appendChild(details)

    const activeDetails = document.createElement("div");
    activeDetails.classList.add("showDetail");
    activeDetails.innerHTML = description;
    buttoncontainer.appendChild(activeDetails)

    const favorite = document.createElement("div");
    favorite.classList.add("details");
    favorite.innerHTML = "add to favorite";
    favorite.addEventListener('click',clickHandler);
    buttoncontainer.appendChild(favorite)
}
function clickHandler(){
    console.log("hello");
    this.classList.toggle("active");
    let showDetail = this.nextElementSibling;
    if (showDetail.style.maxHeight){
        showDetail.style.maxHeight = null;
    } else {
        showDetail.style.maxHeight = showDetail.scrollHeight + "px";
    }
}
function init()
{
    for (let spell of spells) {
        newCard(spell.image, spell.name, spell.school, spell.description)
    }
}