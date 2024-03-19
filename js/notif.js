const bell = document.querySelector('.bell');
const containerNotif = document.querySelector('.container-notification');
const allNotif = document.querySelector('.all-notif');


bell.addEventListener('click' , () => {
    if(containerNotif.style.display == 'none'){
        containerNotif.style.display = 'block';
        bell.style.backgroundColor = "#000";
        bell.style.color = "#fff";
        fetch('../data/notif.json')
        .then((response) => {
            response.text()
            .then((data) => {
                displayNotif(JSON.parse(data))
            })
        })
        .catch((err) => console.log("error fetching : " + err))
    }
    else{
        containerNotif.style.display = 'none';
        bell.style.backgroundColor = "#fff";
        bell.style.color = "#1E1E1E";        
        allNotif.innerHTML = "";
    }
})

function createNotif(text , notif){
    const notifElement = document.createElement('div');
    notifElement.classList.add('notif');
    
    const notifDeco = document.createElement('div');
    notifDeco.classList.add('notif-deco');

    const notifContent = document.createElement('div');
    notifContent.classList.add('notif-content');
    notifContent.textContent = text;

    const notifDate = document.createElement('p');
    notifDate.classList.add('date');
    notifDate.textContent = notif.date;

    const notifDelete = document.createElement('span');
    notifDelete.style.cursor = "pointer";
    notifDelete.textContent = "X";

    notifDelete.addEventListener('click' , () => {
        notifElement.remove();    
    })

    notifElement.append(notifDeco);
    notifElement.append(notifContent);
    notifElement.append(notifDate);
    notifElement.append(notifDelete);
    
    allNotif.append(notifElement);
}

function displayNotifPc(notif){
    if(notif.event === "nottaken" && notif.isLate === true){
        const notifText = `L'étudiant ${notif.info.name} ${notif.info.firstName}  ${notif.info.level} n'a pas encore pris sa machine (en retard)`;
        createNotif(notifText , notif);
    }
    if(notif.event === "nottaken" && notif.isLate === false && notif.typeNotLate === "nottaken"){
        const notifText = `L'étudiant ${notif.info.name} ${notif.info.firstName}  ${notif.info.level} n'a pas pris sa machine aujourd'hui`;
        createNotif(notifText , notif);
    }
    
}

function displayNotifAccount(notif){
    if(notif.event === "create"){
        const notifText = `${notif.info.name} ${notif.info.firstName} ${notif.info.level} vous a demandé la permission de créer son compte en tant que ${notif.accountType}`;
        createNotif(notifText , notif);
    }
}



function displayNotif(tabNotif){
    tabNotif = tabNotif.reverse();
    for(let notif of tabNotif){ 
        notif.type === "pc" ? displayNotifPc(notif) : displayNotifAccount(notif);
    }
}




