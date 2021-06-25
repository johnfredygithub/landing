if('serviceWorker'in navigator){
navigator.serviceWorker.register('./sw.js')

.then(reg=>console.log('service wrker exitoso',reg))
.catch(err=>console.warn('error sw',err))

}