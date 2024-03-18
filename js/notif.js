const bell = document.querySelector('.bell');
const containerNotif = document.querySelector('.container-notification');
const allNotif = document.querySelector('.all-notif');


bell.addEventListener('click' , () => {
    if(containerNotif.style.display == 'none'){
        containerNotif.style.display = 'block';
        bell.style.backgroundColor = "#000";
        bell.style.color = "#fff";
        fetch('../data/data_notif.txt')
        .then((response) => {
            response.text()
            .then((data) => {
                const tabNotif = data.split('\n').reverse();
                for(let line of tabNotif){
                    const notif = line.split('|');
                    console.log(notif);
                }
            })
        })
        .catch((err) => console.log("error fetching : " + err))
    }
    else{
        containerNotif.style.display = 'none';
        bell.style.backgroundColor = "#fff";
        bell.style.color = "#1E1E1E";        
    }
})