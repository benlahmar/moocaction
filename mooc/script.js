var ress = document.getElementById('ress1');
ress.addEventListener('play', function (event) {
    /*console.log(event.type);
    console.log(event.timeStamp);
    console.log(event.srcElement.duration);
    console.log(ress.currentTime);*/
     data = new FormData();
    data.append('action', event.type);
    data.append('time', ress.currentTime);
    
    send(data);
    
    
});
ress.addEventListener('pause', function (event) {
    /*console.log(event.type);
    console.log(event.timeStamp);
    console.log(event.srcElement.duration);
    console.log(ress.currentTime);*/
    data = new FormData();
    data.append('action', event.type);
    data.append('time', ress.currentTime);
    
    send(data);
    
});


function get()
{
    const xhr = new XMLHttpRequest(),
        method = "GET",
        url = "json.json";

    xhr.open(method, url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send();
    
    
}


function send(data) {
    const xhr = new XMLHttpRequest(),
        method = "POST",
        url = "http://localhost:81/mooc/ss.php";
    

    xhr.open(method, url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(data);

    

}


