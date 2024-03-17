const btnPrevious = document.querySelector('.btn-previous');
const btnNext = document.querySelector('.btn-next');
const optionProxy = document.querySelector('#option-proxy');
const optionAcl = document.querySelector('#option-acl');
const bell = document.querySelector('.bell');
const containerNotif = document.querySelector('.container-notification');


bell.addEventListener('click' , () => {
    console.log(containerNotif.style.opacity);
    if(containerNotif.style.opacity == 0){
        containerNotif.style.opacity = 1;
        bell.style.backgroundColor = "#FF0000";
        bell.style.color = "#FFFFFF";                
    }
    else{
        containerNotif.style.opacity = 0;
        bell.style.backgroundColor = "#FFFFFF";
        bell.style.color = "#1E1E1E";        
    }
})

optionProxy.addEventListener('click' , () => console.log("optionProxy"));

optionAcl.addEventListener('click' , () => console.log("optionAcl"));

btnPrevious.addEventListener('click' , () => {
    console.log('btn previous click !!');
})

btnNext.addEventListener('click' , () => {
    console.log('btn next click !!');
})


