const btnPrevious = document.querySelector('.btn-previous');
const btnNext = document.querySelector('.btn-next');
const optionProxy = document.querySelector('#option-proxy');
const optionAcl = document.querySelector('#option-acl');

optionProxy.addEventListener('click' , () => console.log("optionProxy"));

optionAcl.addEventListener('click' , () => console.log("optionAcl"));

btnPrevious.addEventListener('click' , () => {
    console.log('btn previous click !!');
})

btnNext.addEventListener('click' , () => {
    console.log('btn next click !!');
})


